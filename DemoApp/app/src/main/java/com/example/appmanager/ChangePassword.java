package com.example.appmanager;

import androidx.appcompat.app.AppCompatActivity;

import android.annotation.SuppressLint;
import android.app.Dialog;
import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;
import androidx.appcompat.widget.Toolbar;

import com.android.volley.AuthFailureError;
import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;

import java.util.HashMap;
import java.util.Map;

public class ChangePassword extends AppCompatActivity {


    Toolbar toolbar;
    Dialog dialog;
    EditText oldpass,newpass,repass;
    Button btn_ok,btn_cancel,btn_confirm,btn_handed;
    String user_name;
    String server_url=LoginActivity.server_url;
    String change_pass_url=server_url+"/app_manager/changePassword.php";
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_change_password);
        Intent change_pw_intent=getIntent();
        user_name=change_pw_intent.getStringExtra("user_name");
        Toast.makeText(this, user_name, Toast.LENGTH_SHORT).show();

        anhxa();
        AddToolbar();
        btn_ok.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                if(oldpass.getText().toString().length()==0||newpass.getText().toString().length()==0||repass.getText().toString().length()==0)
                {
                    Toast.makeText(ChangePassword.this,"Không được bỏ trống các trường nhập liệu!",Toast.LENGTH_SHORT).show();
                }
                else if(newpass.getText().toString().length()<6)
                {
                    Toast.makeText(ChangePassword.this,"Mật khẩu mới phải từ 6 ký tự!",Toast.LENGTH_SHORT).show();
                }
                else if(!newpass.getText().toString().equals(repass.getText().toString()))
                {
                    Toast.makeText(ChangePassword.this,"Xác nhận mật khẩu chưa chính xác!",Toast.LENGTH_SHORT).show();
                }
                else
                {
                    dialog=new Dialog(ChangePassword.this);
                    dialog.setContentView(R.layout.dialog_confirm_changepw);
                    btn_confirm=dialog.findViewById(R.id.btn_changepw_confirm);
                    btn_handed=dialog.findViewById(R.id.btn_changepw_handded);
                    btn_confirm.setOnClickListener(new View.OnClickListener() {
                        @Override
                        public void onClick(View v) {
                            Changepass(change_pass_url);
                        }
                    });
                    btn_handed.setOnClickListener(new View.OnClickListener() {
                        @Override
                        public void onClick(View v) {
                            dialog.cancel();
                        }
                    });
                    dialog.show();
                }


            }
        });
        btn_cancel.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                finish();
            }
        });
    }

    protected void anhxa()
    {
        toolbar=findViewById(R.id.detail_toolbar);
        btn_cancel=findViewById(R.id.btn_changepw_cancel);
        btn_ok=findViewById(R.id.btn_changepw_ok);
        oldpass=findViewById(R.id.edit_old_pass);
        newpass=findViewById(R.id.edit_new_pass);
        repass=findViewById(R.id.edit_re_pass);
    }
    @SuppressLint("RestrictedApi")
    protected void AddToolbar()
    {
        setSupportActionBar(toolbar);
        getSupportActionBar().setDefaultDisplayHomeAsUpEnabled(true);
        toolbar.setNavigationIcon(R.drawable.ic_arrow_back_black_24dp);
        toolbar.setNavigationOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                finish();
            }
        });
    }
    protected void Changepass(String url)
    {
        RequestQueue requestQueue= Volley.newRequestQueue(this);
        StringRequest stringRequest=new StringRequest(Request.Method.POST,url,
                new Response.Listener<String>() {
                    @Override
                    public void onResponse(String response) {
                        if(response.trim().equals("wrongpass"))
                        {
                            Toast.makeText(ChangePassword.this,"Sai mật khẩu hiện tại!",Toast.LENGTH_SHORT).show();
                            dialog.cancel();
                        }
                        else if(response.trim().equals("error post"))
                        {
                            Toast.makeText(ChangePassword.this,"Có lỗi hệ post thông tin!",Toast.LENGTH_SHORT).show();
                            dialog.cancel();
                        }
                        else if(response.trim().equals("success"))
                        {
                            Toast.makeText(ChangePassword.this,"Đổi mật khẩu thành công!",Toast.LENGTH_SHORT).show();
                            Intent login_intent=new Intent(ChangePassword.this,LoginActivity.class);
                            startActivity(login_intent);
                            finish();
                            MainActivity.fa.finish();
                        }
                        else
                        {
                            Toast.makeText(ChangePassword.this,"Lỗi:"+response.trim(),Toast.LENGTH_SHORT).show();
                            dialog.cancel();
                        }
                    }
                },
                new Response.ErrorListener() {
                    @Override
                    public void onErrorResponse(VolleyError error) {
                        Toast.makeText(ChangePassword.this,"Xảy ra lỗi",Toast.LENGTH_SHORT).show();
                        Log.d("AAA","Lỗi!\n"+error.toString());
                    }
                }){
            @Override
            protected Map<String, String> getParams() throws AuthFailureError {
                Map<String,String> params=new HashMap<>();
                params.put("user_name",user_name);
                params.put("new_pass",newpass.getText().toString());
                params.put("old_pass",oldpass.getText().toString());
                return params;
            };
        };
        requestQueue.add(stringRequest);
    }
}

package com.example.appmanager;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import com.android.volley.AuthFailureError;
import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;

import java.util.HashMap;
import java.util.Map;

public class LoginActivity extends AppCompatActivity {


    Intent intent;
    EditText txt_user,txt_pass;
    Button btn_login;

//    String urlcheckuser="http://10.0.2.2:8080/app_manager/login.php";
    String urlcheckuser="http://10.0.2.2:8080/app_manager/login.php";
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);


        anhxa();
        intent=new Intent(LoginActivity.this,MainActivity.class);
        btn_login.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String user_name=txt_user.getText().toString().trim();
                if(user_name.isEmpty())
                {
                    Toast.makeText(LoginActivity.this,"Tên đăng nhập không được bỏ trống",Toast.LENGTH_SHORT).show();
                }
                else
                {
                    checkuser(urlcheckuser);
                }

            }
        });
    }
    private void anhxa()
    {
        btn_login=(Button) findViewById(R.id.btn_login);
        txt_user=findViewById(R.id.edt_login_username);
        txt_pass=findViewById(R.id.edt_login_password);
    }

    private void checkuser(String url)
    {
        RequestQueue requestQueue= Volley.newRequestQueue(this);
        StringRequest stringRequest=new StringRequest(Request.Method.POST, url,
                new Response.Listener<String>() {
                @Override
                public void onResponse(String response) {
                    if(response.trim().equals("success")){
                        startActivity(intent);
                    }
                    else
                    {
                        Toast.makeText(LoginActivity.this,"Sai thông tin đăng nhập",Toast.LENGTH_SHORT).show();
                    }
                }
                },
                new Response.ErrorListener() {
                @Override
                public void onErrorResponse(VolleyError error) {
                    Toast.makeText(LoginActivity.this,"Xảy ra lỗi",Toast.LENGTH_SHORT).show();
                    Log.d("AAA","Lỗi!\n"+error.toString());
                }
                }
                ){
            @Override
            protected Map<String, String> getParams() throws AuthFailureError {
                Map<String,String> params=new HashMap<>();
                params.put("user_name",txt_user.getText().toString().trim());
                params.put("password",txt_pass.getText().toString());
                return params;
            }
        };
        requestQueue.add(stringRequest);
    }
}

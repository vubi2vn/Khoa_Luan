package com.example.appmanager;

import androidx.appcompat.app.AppCompatActivity;
import androidx.appcompat.widget.Toolbar;

import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.RadioButton;
import android.widget.Switch;
import android.widget.TextView;
import android.widget.Toast;

import com.android.volley.AuthFailureError;
import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.JsonObjectRequest;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;

import org.json.JSONException;
import org.json.JSONObject;

import java.util.HashMap;
import java.util.Map;

public class DetailActivity extends AppCompatActivity {

    private Toolbar toolbar;
    TextView txt_phone,txt_name,txt_content,txt_report,txt_id,txt_cmtdate,txt_rpdate;
    Button btn_update;
    Switch aSwitch;
    RadioButton radio_pos,radio_neg;
    int id_report;

    String server_url=LoginActivity.server_url;
    String getcomment_detail_url=server_url+"/app_manager/getCommand.php";
    String update_detail_url=server_url+"/app_manager/update_comment.php";
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_detail);

        Intent detail_intent=getIntent();
        id_report=detail_intent.getIntExtra("id",-1);
        anhxa();
        setToolbar();
        getDetail(getcomment_detail_url);
    }

    protected void anhxa()
    {
        toolbar=findViewById(R.id.detail_comment_toolbar);
    }
    protected void setToolbar()
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
    protected void getDetail(String url)
    {
        url=url+"?ID="+Integer.toString(id_report);
        RequestQueue requestQueue= Volley.newRequestQueue(this);
        JsonObjectRequest jsonObjectRequest=new JsonObjectRequest(Request.Method.GET, url, null,
                new Response.Listener<JSONObject>() {
                    @Override
                    public void onResponse(JSONObject response) {
                        txt_content=findViewById(R.id.txt_detail_content);
                        txt_id=findViewById(R.id.txt_detail_id);
                        txt_name=findViewById(R.id.txt_detail_name);
                        txt_cmtdate=findViewById(R.id.txt_detail_cmtdate);
                        txt_rpdate=findViewById(R.id.txt_detail_rpdate);
                        txt_phone=findViewById(R.id.txt_detail_phone);
                        txt_report=findViewById(R.id.txt_detail_report);
                        btn_update=findViewById(R.id.btn_detail_update);
                        aSwitch=findViewById(R.id.switch_hide);
                        radio_neg=findViewById(R.id.radio_detail_neg);
                        radio_pos=findViewById(R.id.radio_detail_pos);
                        try {
                            txt_content.setText(response.getString("COMMENT_CONTENT"));
                            txt_id.setText(response.getString("ID_REPORT_USER"));
                            txt_name.setText(response.getString("COMMENT_NAME"));
                            txt_phone.setText(response.getString("PHONE"));
                            txt_report.setText(response.getString("REPORT_TYPE"));
                            txt_rpdate.setText(response.getString("DATE_REPORT"));
                            txt_cmtdate.setText(response.getString("DATE_COMMENT"));
                            if(response.getString("STATUS").equals("1"))
                            {
                                btn_update.setEnabled(false);
                            }
                            if(response.getString("HIDE").equals("1"))
                            {
                                aSwitch.setChecked(true);
                            }
                            else
                            {
                                aSwitch.setChecked(false);
                            }
                            if(response.getString("CLASS").equals("1"))
                            {
                                radio_pos.setChecked(true);
                            }else
                            {
                                radio_neg.setChecked(true);
                            }
                        } catch (JSONException e) {
                            e.printStackTrace();
                        }
                        btn_update.setOnClickListener(new View.OnClickListener() {
                            @Override
                            public void onClick(View v) {
                                String classes="0";
                                String hide="0";
                                if(aSwitch.isChecked())
                                {
                                    hide="1";
                                }
                                if(radio_pos.isChecked())
                                {
                                    classes="1";
                                }
                                updateComment(update_detail_url,classes,hide);
                            }
                        });
                    }
                },
                new Response.ErrorListener() {
                    @Override
                    public void onErrorResponse(VolleyError error) {
                        Toast.makeText(DetailActivity.this,"Xảy ra lỗi lấy thông tin",Toast.LENGTH_SHORT).show();
                        Log.d("error_detail","Lỗi!\n"+error.toString());
                    }
                });
        requestQueue.add(jsonObjectRequest);

    }
    protected void updateComment(String url, final String classes, final String hide)
    {
        RequestQueue nrequestQueue=Volley.newRequestQueue(this);
        StringRequest stringRequest=new StringRequest(Request.Method.POST, url,
                new Response.Listener<String>() {
                    @Override
                    public void onResponse(String response) {
                        if(response.trim().equals("success"))
                        {
                            Toast.makeText(DetailActivity.this, "Cập nhật thành công", Toast.LENGTH_SHORT).show();
                            finish();
                        } else if(response.trim().equals("error update score"))
                        {
                            Toast.makeText(DetailActivity.this, "Lỗi cập nhật điểm ", Toast.LENGTH_SHORT).show();
                            finish();
                        }else if(response.trim().equals("error update detail report"))
                        {
                            Toast.makeText(DetailActivity.this, "Lỗi cập nhật thông tin báo cáo ", Toast.LENGTH_SHORT).show();
                            finish();
                        }
                        else if(response.trim().equals("error update comment"))
                        {
                            Toast.makeText(DetailActivity.this, "Lỗi cập nhật thông tin bình luận ", Toast.LENGTH_SHORT).show();
                            finish();
                        }
                        else
                        {
                            Toast.makeText(DetailActivity.this, response.trim(), Toast.LENGTH_SHORT).show();
                            finish();
                        }

                    }
                }, new Response.ErrorListener() {
            @Override
            public void onErrorResponse(VolleyError error) {
                Toast.makeText(DetailActivity.this,"Xảy ra lỗi update",Toast.LENGTH_SHORT).show();
                Log.d("error_detail","Lỗi!\n"+error.toString());
            }
        }){
            @Override
            protected Map<String, String> getParams() throws AuthFailureError {
                Map<String, String> param=new HashMap<>();
                param.put("hide",hide);
                param.put("class",classes);
                param.put("id_report",Integer.toString(id_report));
                return param;
            }
        };
        nrequestQueue.add(stringRequest);
    }
}

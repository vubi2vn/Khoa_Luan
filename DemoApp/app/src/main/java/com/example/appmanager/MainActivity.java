package com.example.appmanager;

import androidx.annotation.NonNull;
import androidx.appcompat.app.AppCompatActivity;
import androidx.appcompat.widget.Toolbar;
import androidx.core.view.GravityCompat;
import androidx.drawerlayout.widget.DrawerLayout;


import android.annotation.SuppressLint;
import android.app.Activity;
import android.app.Dialog;
import android.content.Intent;
import android.os.Bundle;
import android.text.Editable;
import android.text.TextWatcher;
import android.util.Log;
import android.view.MenuItem;
import android.view.View;
import android.view.WindowManager;
import android.widget.AdapterView;
import android.widget.Button;
import android.widget.CompoundButton;
import android.widget.EditText;
import android.widget.ImageView;
import android.widget.ListView;
import android.widget.TextView;
import android.widget.Toast;
import android.widget.ToggleButton;

import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.JsonArrayRequest;
import com.android.volley.toolbox.JsonObjectRequest;
import com.android.volley.toolbox.Volley;
import com.google.android.material.navigation.NavigationView;
import com.squareup.picasso.Picasso;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;
import java.util.Timer;


public class MainActivity extends AppCompatActivity {

    public static Activity fa;
    TextView name_user;
    ImageView avatar;
    Button btn_exit_ok,btn_exit_cancel;
    Toolbar toolbar;
    DrawerLayout drawerLayout;
    NavigationView navigationView;
    ListView listView;
    ArrayList<comments> commentsArrayList;
    CommentAdapter commentAdapter;
    EditText txt_search;
    ToggleButton btn_search_yes,btn_search_no;

    String user_name;
    String server_url=LoginActivity.server_url;
    String image_url=server_url+"phone/web_admin/";
    String getuser_infor_url=server_url+"/app_manager/getUserInfor.php";
    String getuser_comments_url=server_url+"/app_manager/getCommentList.php";
    String condition,check;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        fa=this;
        Intent main_intent=getIntent();
        user_name=main_intent.getStringExtra("user_name");
        anhxa();
        AddToolbar();
        intDrawerLayout();
        GetUserData(getuser_infor_url);
        condition="";
        check="2";

        FillListView();
        setToggleButton();
        SearchReport();
    }

    @Override
    public void onBackPressed() {

    }

    protected void anhxa()
    {
        toolbar=findViewById(R.id.detail_toolbar);
        drawerLayout=findViewById(R.id.drawer_main);
        navigationView=findViewById(R.id.navagation_view);
        listView=findViewById(R.id.list_comment);
        txt_search=findViewById(R.id.edit_search);
        btn_search_yes=findViewById(R.id.btn_search_yes);
        btn_search_no=findViewById(R.id.btn_search_no);

    }

    protected void setToggleButton()
    {
        CompoundButton.OnCheckedChangeListener listener=new CompoundButton.OnCheckedChangeListener() {
            @Override
            public void onCheckedChanged(CompoundButton buttonView, boolean isChecked) {
                switch (buttonView.getId())
                {
                    case R.id.btn_search_yes:
                    {
                        if(!buttonView.isChecked())
                        {
                            if(!btn_search_no.isChecked()) {
                                check = "2";
                                getDataComment(getuser_comments_url);
                            }

                        }
                        else
                        {
                            if(btn_search_no.isChecked())
                            {
                                btn_search_no.setChecked(false);
                            }
                            check="1";
                            getDataComment(getuser_comments_url);
                        }
                    }break;
                    case R.id.btn_search_no:
                    {
                        if(!buttonView.isChecked())
                        {
                            if(!btn_search_yes.isChecked()) {
                                check = "2";
                                getDataComment(getuser_comments_url);
                            }

                        }
                        else
                        {
                            if(btn_search_yes.isChecked())
                            {
                                btn_search_yes.setChecked(false);
                            }
                            check="0";
                            getDataComment(getuser_comments_url);
                        }
                    }break;
                }
            }
        };
        btn_search_yes.setOnCheckedChangeListener(listener);
        btn_search_no.setOnCheckedChangeListener(listener);
    }
    @SuppressLint("RestrictedApi")
    protected void AddToolbar()
    {
        setSupportActionBar(toolbar);
        getSupportActionBar().setDefaultDisplayHomeAsUpEnabled(true);
        toolbar.setNavigationIcon(R.drawable.ic_dehaze_black_24dp);
        toolbar.setNavigationOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                drawerLayout.openDrawer(GravityCompat.START);
            }
        });
    }
    private void intDrawerLayout() {

        navigationView.setNavigationItemSelectedListener(new NavigationView.OnNavigationItemSelectedListener() {
            @Override
            public boolean onNavigationItemSelected(@NonNull MenuItem menuItem) {
                switch (menuItem.getItemId())
                {
                    case R.id.nav_user:
                    {
                        Intent intent_change_pw=new Intent(MainActivity.this,ChangePassword.class);
                        intent_change_pw.putExtra("user_name",user_name);
                        startActivity(intent_change_pw);
                        drawerLayout.closeDrawer(GravityCompat.START);
                    }
                    break;
                    case R.id.nav_exit:{
                        final Dialog dialog=new Dialog(MainActivity.this);
                        dialog.setContentView(R.layout.dialog_exit);
                        btn_exit_ok=dialog.findViewById(R.id.btn_exits_ok);
                        btn_exit_cancel=dialog.findViewById(R.id.btn_exits_cancel);
                        btn_exit_ok.setOnClickListener(new View.OnClickListener() {
                            @Override
                            public void onClick(View v) {
                                finish();
                            }
                        });
                        btn_exit_cancel.setOnClickListener(new View.OnClickListener() {
                            @Override
                            public void onClick(View v) {
                                dialog.cancel();
                            }
                        });
                        dialog.getWindow().setLayout(WindowManager.LayoutParams.MATCH_PARENT,WindowManager.LayoutParams.WRAP_CONTENT);
                        dialog.show();
                        drawerLayout.closeDrawer(GravityCompat.START);
                    }

                    break;
                }
                return false;
            }
        });
    }
    private void GetUserData(String url)
    {

        url=url+"?user_name="+user_name;
        RequestQueue requestQueue= Volley.newRequestQueue(this);
        JsonObjectRequest jsonArrayRequest=new JsonObjectRequest(Request.Method.GET, url, null,
                new Response.Listener<JSONObject>() {
                    @Override
                    public void onResponse(JSONObject response) {
                        try {
                            name_user=findViewById(R.id.txt_name_navigation);
                            avatar=findViewById(R.id.imageViewNavigation);
                            name_user.setText(response.getString("NAME"));
                            Picasso.get().load(image_url+response.getString("IMAGE")).into(avatar);
                        } catch (JSONException e) {
                            e.printStackTrace();
                        }

                    }
                },
        new Response.ErrorListener() {
                    @Override
                    public void onErrorResponse(VolleyError error) {
                        Toast.makeText(MainActivity.this,"Xảy ra lỗi user",Toast.LENGTH_SHORT).show();
                        Log.d("error_user","Lỗi!\n"+error.toString());
                    }
                });
        requestQueue.add(jsonArrayRequest);

    }

    private void FillListView()
    {
        commentsArrayList =new ArrayList<comments>();
        commentAdapter= new CommentAdapter(this,R.layout.row_comments,commentsArrayList);
        listView.setAdapter(commentAdapter);


        getDataComment(getuser_comments_url);
    }

    private void getDataComment(String url)
    {
        commentsArrayList.clear();
        commentAdapter.notifyDataSetChanged();
        url=url+"?condition="+condition+"&check="+check;
        RequestQueue nrequestQueue=Volley.newRequestQueue(this);
        JsonArrayRequest jsonArrayRequests=new JsonArrayRequest(Request.Method.GET, url, null,
                new Response.Listener<JSONArray>() {
                    @Override
                    public void onResponse(JSONArray response) {
                        for(int i=0; i< response.length();i++)
                        {
                            try {
                                JSONObject jsonObject=response.getJSONObject(i);
                                commentsArrayList.add(new comments(
                                        jsonObject.getInt("ID"),
                                        jsonObject.getString("DATE_COMMENT"),
                                        jsonObject.getString("DATE_REPORT"),
                                        jsonObject.getInt("STATUS"),
                                        jsonObject.getString("PHONE")
                                        ));
                            } catch (JSONException e) {
                                e.printStackTrace();
                            }

                        }
                        commentAdapter.notifyDataSetChanged();
                    }
                },
                new Response.ErrorListener() {
                    @Override
                    public void onErrorResponse(VolleyError error) {
                        Toast.makeText(MainActivity.this,"Xảy ra lỗi comments",Toast.LENGTH_SHORT).show();
                        Log.d("error_comment","Lỗi!\n"+error.toString());

                    }
                });
        nrequestQueue.add(jsonArrayRequests);
        listView.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> parent, View view, int position, long id) {
                comments cm=commentsArrayList.get(position);
                Intent detail_intent=new Intent(MainActivity.this,DetailActivity.class);
                detail_intent.putExtra("id",cm.getID());
                startActivity(detail_intent);
            }
        });
    }
    private void SearchReport()
    {
        txt_search.addTextChangedListener(new TextWatcher() {
            @Override
            public void beforeTextChanged(CharSequence s, int start, int count, int after) {

            }

            @Override
            public void onTextChanged(CharSequence s, int start, int before, int count) {
                condition=txt_search.getText().toString();
                getDataComment(getuser_comments_url);
            }

            @Override
            public void afterTextChanged(Editable s) {

            }
        });
    }
}

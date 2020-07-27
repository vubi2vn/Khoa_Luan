package com.example.appmanager;

import android.content.Context;
import android.graphics.Color;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.BaseAdapter;
import android.widget.TextView;

import java.util.List;

public class CommentAdapter extends BaseAdapter {

    private Context context;
    private int layout;
    private List<comments> commentsList;

    public CommentAdapter(Context context, int layout, List<comments> commentsList) {
        this.context = context;
        this.layout = layout;
        this.commentsList = commentsList;
    }

    @Override
    public int getCount() {
        return commentsList.size();
    }

    @Override
    public Object getItem(int position) {
        return commentsList.get(position);
    }

    @Override
    public long getItemId(int position) {
        return position;
    }

    @Override
    public View getView(int position, View convertView, ViewGroup parent) {
        CommentAdapter.ViewHolder holder;
        if(convertView == null || convertView.getTag() == null)
        {
            holder=new CommentAdapter.ViewHolder();
            LayoutInflater layoutInflater= (LayoutInflater) context.getSystemService(Context.LAYOUT_INFLATER_SERVICE);
            convertView=layoutInflater.inflate(layout,null);
            holder.txt_id=convertView.findViewById(R.id.txt_comment_id);
            holder.txt_status=convertView.findViewById(R.id.txt_comment_status);
            holder.txt_comment_date=convertView.findViewById(R.id.txt_comment_cmtdate);
            holder.txt_report_date=convertView.findViewById(R.id.txt_comment_rpdate);
            holder.txt_phone=convertView.findViewById(R.id.txt_comment_phone);
            convertView.setTag(holder);
        }
        else
        {
            holder=(CommentAdapter.ViewHolder) convertView.getTag();
        }
        comments cmt=commentsList.get(position);
        holder.txt_id.setText("ID báo cáo:"+Integer.toString(cmt.getID()));
        if(cmt.getTinhTrang()==1)
        {
            holder.txt_status.setText("Đã xử lý");
            holder.txt_status.setTextColor(Color.parseColor("#00FF00"));
        }
        else
        {
            holder.txt_status.setText("Chưa xử lý");
            holder.txt_status.setTextColor(Color.parseColor("#FF0000"));
        }
        holder.txt_comment_date.setText(cmt.getNgayBL());
        holder.txt_report_date.setText(cmt.getNgayBC());
        holder.txt_phone.setText(cmt.getDienThoai());
        return convertView;
    }

    private class ViewHolder{
        TextView txt_id,txt_status,txt_comment_date,txt_report_date,txt_phone;
    }
}

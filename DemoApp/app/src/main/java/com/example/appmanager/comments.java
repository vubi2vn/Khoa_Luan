package com.example.appmanager;

public class comments {
    private int ID;
    private String NgayBL;
    private String NgayBC;
    private int TinhTrang;
    private String DienThoai;

    public comments(int ID, String ngayBL, String ngayBC, int tinhTrang, String dienThoai) {
        this.ID = ID;
        NgayBL = ngayBL;
        NgayBC = ngayBC;
        TinhTrang = tinhTrang;
        DienThoai = dienThoai;
    }

    public int getID() {
        return ID;
    }

    public String getNgayBL() {
        return NgayBL;
    }

    public String getNgayBC() {
        return NgayBC;
    }

    public int getTinhTrang() {
        return TinhTrang;
    }

    public String getDienThoai() {
        return DienThoai;
    }
}

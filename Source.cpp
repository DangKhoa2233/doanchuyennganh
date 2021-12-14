#include "Header.h"


int(float a, float b, float c, float& x1, float& x2)
{
	if (a == 0)
	{
		if (b == 0)
		{
			if (c == 0)
				return 3;
			else
				return 0;
		}
		else
		{
			x1 = x2 = -c / a;
			return 1;
		}
	}
	float delta = b * b - 4 * a * c;
	if (delta < 0) {
		//x1 = x2 = 0.0;
		return 0;
	}
	else if (delta == 0) {
		x1 = x2 = -b / (2 * a);
		return 1;
	}
	else {
		delta = sqrt(delta);
		x1 = (-b + delta) / (2 * a);
		x2 = (-b - delta) / (2 * a);
		return 2;
	}
}





//Ma tran vuong bac 3 co nghia la ma tran co 3 dong va 3 cot
//B1. Tim max tren tung dong
//Hoan doi gia tri giua ptu max voi a[i][i]
void hoanDoiMaxDuongCheoChinh(int a[][MAX], int bac)
{
	for (int i = 0; i < bac; i++)
	{
		//gia cot 0 la ptu max
		int max = 0;//gia su ptu dau tien tren dong la max cua dong i, max chua cot
		for (int j = 1; j < bac; j++)
			if (a[i][j] > a[i][max])
				max = j;
		swap(a[i][i], a[i][max]);
	}
}

//struct SinhVien
//{
//	char ma[11];
//	char hoTen[50];
//	float diemQT, diemGK, diemCK;
//
//};
//struct Lop
//{
//	SinhVien ds[MAX];//mang chua thong tin cac sv co trong lop hoc
//	int soLuong;//so luong SV thuc te co trong lop hoc
//};
float diemTongKet(SinhVien sv);
void nhap(SinhVien& sv)
{
	cout << "Nhap ma: ";
	cin >> sv.ma;
	cin.ignore();
	cout << "Ho ten: ";
	cin.getline(sv.hoTen, 50);
	cout << "Nhap diem QT: ";
	cin >> sv.diemQT;
	cout << "Nhap diem GK: ";
	cin >> sv.diemGK;
	cout << "Nhap diem CK: ";
	cin >> sv.diemCK;
}
void xuat(SinhVien sv)
{
	cout << sv.ma << "\t| " << sv.hoTen << "\t| " << sv.diemQT << "\t| "
		<< sv.diemGK << "\t| " << sv.diemCK << "\t| " << diemTongKet(sv) << endl;
}
void nhap(Lop& l)
{
	do {
		cout << "Lop co may SV?";
		cin >> l.soLuong;
	} while (l.soLuong <= 0 || l.soLuong > MAX);
	//MAX =100 (sl <=0 && sl>100)
	for (int i = 0; i < l.soLuong; i++)
		nhap(l.ds[i]);//Nhap thong tin cho SV thu i
}
void xuat(Lop& l)
{
	for (int i = 0; i < l.soLuong; i++)
		xuat(l.ds[i]);
}
//Cac ham xu ly lien quan den lop
//Cho biet diem tong ket cao nhat lop la bao nhieu. 
//Biet diemTK duoc tinh theo cong thuc 20%diemQT+20%diemGK+60%diemCK
//Hoc bu vao sang chu nhat 4/7/2021
float diemTongKet(SinhVien sv)
{
	return sv.diemQT * 0.2 + sv.diemGK * 0.2 + sv.diemCK * 0.6;
}

float diemCaoNhat(Lop l) {
	float diemMax = 0;
	for (int i = 0; i < l.soLuong; i++)
	{
		if (diemTongKet(l.ds[i]) > diemMax)
			diemMax = diemTongKet(l.ds[i]);
	}
	return diemMax;
}
//Xuat ra thong tin cua SV gioi nhat lop
void xuatSinhVienGioiNhat(Lop l)
{
	float diemMax = diemCaoNhat(l);
	for (int i = 0; i < l.soLuong; i++)
	{
		if (diemTongKet(l.ds[i]) == diemMax)
			xuat(l.ds[i]);
	}
}
//Viet ham sap xep danh sach cua 1 lop theo thu tu giam dan theo diem tong ket.
//Co nghia la nguoi hoc gioi truoc => hoc te sau
void sapXepGiam(Lop& l)
{
	for (int i = 0; i < l.soLuong - 1; i++)
		for (int j = i + 1; j < l.soLuong; j++)
			if (diemTongKet(l.ds[i]) < diemTongKet(l.ds[j]))
				swap(l.ds[i], l.ds[j]);
}
//Viet ham sap xep theo ten
void sapXepTheoTen(Lop& l)
{
	for (int i = 0; i < l.soLuong - 1; i++)
		for (int j = i + 1; j < l.soLuong; j++)
			if (strcmp(l.ds[i].hoTen, l.ds[j].hoTen) > 0)
				swap(l.ds[i], l.ds[j]);
}
void nhapMang(int a[][MAX], int dong, int cot)
{
	for (int  i = 0; i < dong ; i++)
	{
		for (int  j = 0; j < cot; i++)
		{
			cout << " nhap mang :";
			cin >> a[i][j];
		}
	}
}
void xuatMang(int a[][MAX], int dong, int cot)
{
	for (int  i = 0; i < dong; i++)
	{
		for (int  j = 0; i < cot ; i++)
		{
			cout << " " << a[i][j]<<" ";
		} 
		cout << endl;
	}

}

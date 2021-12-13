#include "Header.h"

//}
//int timPhanTuMin(int a[][MAX], int dong, int cot)
//{
//	int maxAm = 0;
//	for (int  i = 0; i < dong ; i++)
//	{
//		for (int  j = 0; j < cot; j++)
//		{
//			if (a[i][j] < maxAm)
//				maxAm = a[i][j];
//			break;
//		}
//	}
//	if (maxAm != 0)
//	{
//		for (int i = 0; i < dong; i++)
//		{
//			for (int j = 0; j < cot; j++)
//				if (a[i][j] > 0 && a[i][j] < maxAm)
//					maxAm = a[i][j];
//		}
//		return maxAm;
//	}
//}
//bool tinhSoChinhPhuong( int n)
//{
//	int sqr = sqrt(n);
//	return (sqr * sqr == n);
//}
//int demSoChinhPhuong(int a[][MAX], int dong, int cot)
//{
//	int dem = 0;
//	for (int i = 0; i < dong; i++)
//
//	{
//		for (int j = 0; j < cot; j++)
//		{
//			if ((a[i][j]) == 1)
//				dem++;
//		}
//	}
//	return dem;

//void nhapMang(int a[], int n)
//{
//	for (int  i = 0; i < n; i++)
//	{
//		cout << "/nnhap a[" << i << "]";
//		cin >> a[i];
//	}
//}
//void xuatMang(int a[], int n)
//{
//	for (int  i = 0; i < n; i++)
//	{
//		cout << a[i] << ",";
//	}
//}
//void nhapMang(int a[][MAX], int dong, int cot)
//{
//	for ( int  i = 0; i < dong ; i++)
//	{
//		for ( int  j = 0; j < cot; j++)
//		{
//			cout << " nhap vao gia tri vao bang :";
//			cin >> a[i][j];
//		}
//	}
//}
//void xuatMang(int a[][MAX], int dong, int cot)
//{
//	for (int i = 0; i < dong; i++)
//	{
//		for (int j = 0; j < cot; j++)
//		{
//			cout << " " <<a[i][j]<<" ";
//		}
//		cout << endl;
//	}
//}

#define MAX 100
/*
0: vo nghiem
1: 1 nghiem
2: 2 nghiem
3: vo so nghiem
*/
int giaiPT(float a, float b, float c, float& x1, float& x2)
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

//int tong(int n)
//{
//	cout << "Nhap n: ";
//	cin >> n;
//	int s = 0;
//	for (int i = 0; i < n; i++)
//		s += i;
//	return s;
//}
//bool kiemTraSNT(int n) {
//	if (n < 2)
//		return false;
//	for (int i = 2; i <= sqrt(n); i++)
//		if (n%i == 0)
//			return false;
//	return true;
//}


//
//
////Neu mang ko co so hoan thien thi ham tra ve 0
//int soHTLN(int a[], int n)
//{
//	int max = 0;
//	for (int i = 0; i<n; i++)
//		if (kiemTraSoHoanThien(a[i])) //if (kiemTraSoHoanThien(a[i])==true) //co nghia ptu thu i la so hoan thien
//			if(a[i]>max) //phan tu thu i vua la so hoan thien va lon hon so hoan thien da tim duoc truoc do
//				max = a[i];
//	return max;
//}
//
//double tinhTrungBinhCongSoDuong(int a[], int n)
//{
//	double  tong = 0;
//	int dem = 0;
//	for (int i = 0; i<n; i++)
//		if (a[i]> 0)//so chan
//		{
//			tong += a[i];
//			dem++;
//		}
//	return tong / dem;
//}
//
//float tinhTB(int a[], int n) {
//	float tb, tong = 0;
//	int dem = 0;
//	for (int i = 0; i<n; i++) {
//		if (a[i] > 0) {
//			tong = tong + a[i];
//			dem++;
//		}
//	}
//	if (dem == 0)
//		return 0;
//	else
//	{
//		tb = tong / dem;
//		return tb;
//	}
//}
//double tinhTrungBinhCongSoDuong(int a[], int n)
//{
//	double  tong = 0;
//	int dem = 0;
//	for (int i = 0; i<n; i++)
//		if (a[i]>0)
//		{
//			tong += a[i];
//			dem++;
//		}
//	return tong / dem;
//}
//bool kiemTraMangTang(int a[], int n)
//{
//	for (int i = 0; i < n - 1; i++)
//	{
//		if (a[i] >= a[i + 1])
//			return false;
//	}
//	return true;
//}
//
//



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
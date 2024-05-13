<?php
echo"Bài 1:  Quản lý thông tin của một nhân viên. <br>";
class Employee {
    private $name;
    private $age;
    private $salary;
    private $department;

    public function __construct(
     $name = "Unknown",
     $age = 0,
     $salary = 0,
     $department = "Unassigned"
    ) {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
        $this->department = $department;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function setSalary($salary) {
        $this->salary = $salary;
    }

    public function getDepartment() {
        return $this->department;
    }

    public function setDepartment($department) {
        $this->department = $department;
    }

    public function displayInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "Salary: " . $this->salary . "<br>";
        echo "Department: " . $this->department . "<br>";
    }
}

$employee1 = new Employee("Đạt Văn Tây", 40, 60000, "IT");
$employee1->displayInfo();
echo"<br>";
$employee2 = new Employee();
$employee2->setName("Tinh Đỗ");
$employee2->setAge(28);
$employee2->setSalary(55000);
$employee2->setDepartment("HR");
$employee2->displayInfo();

echo"<br>";
echo"<br>";
echo"Bài 2: Quản lý các đơn hàng trong một cửa hàng trực tuyến. <br>";
class Order {
    public $maDonHang;
    public $ngayDatHang;
    public $tenKhachHang;
    public $cacSanPhamTrongDonHang = [];

    public function __construct($maDonHang, $ngayDatHang, $tenKhachHang, $cacSanPham = []) {
        $this->maDonHang = $maDonHang;
        $this->ngayDatHang = $ngayDatHang;
        $this->tenKhachHang = $tenKhachHang;
        $this->cacSanPhamTrongDonHang = $cacSanPham;
    }

    public function addProduct($maSanPham, $tenSanPham, $soLuong, $donGia) {
        $sanPham = [
            'maSanPham' => $maSanPham,
            'tenSanPham' => $tenSanPham,
            'soLuong' => $soLuong,
            'donGia' => $donGia
        ];
        $this->cacSanPhamTrongDonHang[] = $sanPham;
    }

    public function getTotalPrice() {
        $totalPrice = 0;
        foreach ($this->cacSanPhamTrongDonHang as $sanPham) {
            $totalPrice += $sanPham['soLuong'] * $sanPham['donGia'];
        }
        return $totalPrice;
    }

    public function getOrderInfo() {
        $orderInfo = "Thông tin đơn hàng: <br>";
        $orderInfo .= "Mã đơn hàng: {$this->maDonHang} <br>";
        $orderInfo .= "Ngày đặt hàng: {$this->ngayDatHang} <br>";
        $orderInfo .= "Tên khách hàng: {$this->tenKhachHang} <br>";
        $orderInfo .= "Các sản phẩm trong đơn hàng: <br>";
        foreach ($this->cacSanPhamTrongDonHang as $sanPham) {
            $orderInfo .= " - Mã sản phẩm: {$sanPham['maSanPham']}, Tên sản phẩm: {$sanPham['tenSanPham']}, Số lượng: {$sanPham['soLuong']}, Đơn giá: {$sanPham['donGia']} VND <br>";
        }
        $orderInfo .= "Tổng giá trị đơn hàng: {$this->getTotalPrice()} VND <br>";
        return $orderInfo;
    }
}

$order = new Order('DH001', '2024-05-12', 'Nguyễn Văn A');
$order->addProduct('SP001', 'Áo thun', 2, 150000);
$order->addProduct('SP002', 'Quần jeans', 1, 250000);
$order->addProduct('SP003', 'Giày thể thao', 1, 300000);

echo $order->getOrderInfo();

echo"<br>";
echo"<br>";
echo"Bài 3: Quản lý thông tin về nhân viên trong một công ty. <br>";
class Employeee {
    private $maNhanVien;
    private $tenNhanVien;
    private $luongCoBan;
    private $phuCap;
    private $phongBan;

    public function __construct($maNhanVien = "", $tenNhanVien = "", $luongCoBan = 0, $phuCap = 0, $phongBan = "") {
        $this->maNhanVien = $maNhanVien;
        $this->tenNhanVien = $tenNhanVien;
        $this->luongCoBan = $luongCoBan;
        $this->phuCap = $phuCap;
        $this->phongBan = $phongBan;
    }

    public function getMaNhanVien() {
        return $this->maNhanVien;
    }

    public function setMaNhanVien($maNhanVien) {
        $this->maNhanVien = $maNhanVien;
    }

    public function getTenNhanVien() {
        return $this->tenNhanVien;
    }

    public function setTenNhanVien($tenNhanVien) {
        $this->tenNhanVien = $tenNhanVien;
    }

    public function getLuongCoBan() {
        return $this->luongCoBan;
    }

    public function setLuongCoBan($luongCoBan) {
        $this->luongCoBan = $luongCoBan;
    }

    public function getPhuCap() {
        return $this->phuCap;
    }

    public function setPhuCap($phuCap) {
        $this->phuCap = $phuCap;
    }

    public function getPhongBan() {
        return $this->phongBan;
    }

    public function setPhongBan($phongBan) {
        $this->phongBan = $phongBan;
    }

    public function calculateSalary() {
        return $this->luongCoBan + $this->phuCap;
    }

    public function getInfo() {
        $info = "Thông tin nhân viên: <br>";
        $info .= "Mã nhân viên: {$this->maNhanVien} <br>";
        $info .= "Tên nhân viên: {$this->tenNhanVien} <br>";
        $info .= "Lương cơ bản: {$this->luongCoBan} <br>";
        $info .= "Phụ cấp: {$this->phuCap} <br>";
        $info .= "Phòng ban: {$this->phongBan} <br>";
        $info .= "Tổng lương: {$this->calculateSalary()} <br>";
        return $info;
    }
}

$employeee = new Employeee("NV001", "Nguyễn Văn A", 5000000, 1000000, "Phòng Kinh Doanh");
echo $employeee->getInfo();

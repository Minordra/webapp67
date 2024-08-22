// ฟังก์ชันตรวจสอบข้อมูลและแสดงป๊อปอัป
function validateForm() {
    // ตรวจสอบข้อมูล (สมมติว่าตรวจสอบกับฐานข้อมูล)
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;

    if (username !== "your_username" || password !== "your_password") {
        // ถ้าข้อมูลไม่ถูกต้อง แสดงป๊อปอัป
        document.getElementById("myPopup").style.display = "block";
        return false;
    }
    return true;
}

// ฟังก์ชันปิดป๊อปอัป
function closePopup() {
    document.getElementById("myPopup").style.display = "none";
}

// เพิ่ม event listener ให้กับฟอร์ม
let form = document.querySelector('form');
form.addEventListener('submit', (event) => {
    event.preventDefault(); // ป้องกันการส่งฟอร์มแบบปกติ
    if (!validateForm()) {
        return;
    }
    // ถ้าข้อมูลถูกต้อง ดำเนินการต่อไป เช่น ส่งข้อมูลไปยังเซิร์ฟเวอร์
    alert('เข้าสู่ระบบสำเร็จ!');
});
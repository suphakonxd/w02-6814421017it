<?php
$pageTitle = "ประวัติ (Bio) - suphakon";
include 'includes/header.php';
include 'includes/navbar.php';
?>

<main class="container mx-auto my-8 px-6 flex-grow">
    <h1 class="text-3xl font-bold mb-6">ประวัติ (Bio)</h1>

    <!-- ส่วนรูปภาพและข้อมูลส่วนตัว -->
    <div class="flex flex-col md:flex-row items-center md:items-start gap-6">
        <!-- รูปโปรไฟล์ (เปลี่ยนชื่อไฟล์ตรง src ให้ตรงกับไฟล์ของคุณ) -->
        <img src="images/profile.jpg" 
             alt="รูปโปรไฟล์ นายศุภกร เลิศธัญญา" 
             class="w-40 h-40 object-cover rounded-full border-4 border-blue-100 shadow-md shrink-0">

        <!-- ข้อมูลส่วนตัว -->
        <div class="space-y-2 text-slate-700">
            <p><strong>ชื่อ:</strong> นายศุภกร เลิศธัญญา</p>
            <p><strong>ชื่อเล่น:</strong> ก้านกล้วย</p>
            <p><strong>อายุ:</strong> 20</p>
            <p><strong>รายละเอียด:</strong> นักศึกษา</p>
            <p><strong>งานอดิเรก:</strong> เล่นเกม, ฟังเพลง</p>
        </div>
    </div>

    <h2 class="text-2xl font-semibold mt-8 mb-2">การศึกษา</h2>
    <p class="text-slate-700">กำลังศึกษาในสาขาเทคโนโลยีสารสนเทศ / วิทยาการคอมพิวเตอร์</p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">ทักษะความสามารถ</h2>
    <ul class="list-disc list-inside space-y-1 text-slate-700">
        <li>HTML / CSS</li>
        <li>JavaScript</li>
        <li>การพัฒนาเว็บไซต์</li>
    </ul>
</main>

<?php
include 'includes/footer.php';
?>
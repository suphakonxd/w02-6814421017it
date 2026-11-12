<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>suphakon</title>
    <style>
        .page-section {
            display: none;
        }
        .active {
            display: block;
        }
    </style>
</head>
<body>
    <header>
        <h1>Wed suphakon</h1>
        <nav>
            <ul>
                <li><a href="#" onclick="showSection('home')">โฮมเพจ (Home)</a></li>
                <li><a href="#" onclick="showSection('bio')">ประวัติ (Bio)</a></li>
                <li><a href="#" onclick="showSection('assignment')">รายการงาน (Assignment)</a></li>
            </ul>
        </nav>
    </header>

    <hr>
    <main>
        <section id="home" class="page-section active">
            <h2>โฮมเพจ (Home)</h2>
            <p>ยินดีต้อนรับสู่เว็บไซต์ของ suphakon เป็นพื้นที่สำหรับแสดงผลงานและข้อมูลส่วนตัว</p>
        </section>

        <section id="bio" class="page-section">
            <h2>ประวัติ (Bio)</h2>
            <p><strong>ชื่อ:</strong> นายศุภกร เลิศธัญญา</p>
            <p><strong>ชื่อเล่น:</strong>ก้านกล้วย</p>
            <p><strong>อายุ:</strong>20</p>
            <p><strong>รายละเอียด:</strong> นักศึกษา</p>
            <p><strong>งานอดิเรก:</strong> เล่นเกม,ฟังเพลง</p>
            
            <h3>การศึกษา</h3>
            <p>กำลังศึกษาในสาขาเทคโนโลยีสารสนเทศ / วิทยาการคอมพิวเตอร์</p>

            <h3>ทักษะความสามารถ</h3>
            <ul>
                <li>HTML / CSS</li>
                <li>JavaScript</li>
                <li>การพัฒนาเว็บไซต์</li>
            </ul>
        </section>

        <section id="assignment" class="page-section">
            <h2>รายการงาน (Assignment)</h2>
            
            <article>
                <h3>W01</h3>
                <p>รายละเอียด:ออกแบบโครงสร้างเลย์เอาท์หน้าเว็บ</p>
            </article>
        </section>
    </main>

    <hr>

    <script>
        function showSection(sectionId) {
            const sections = document.querySelectorAll('.page-section');
            sections.forEach(sec => sec.classList.remove('active'));
            document.getElementById(sectionId).classList.add('active');
        }
    </script>
</body>
</html>
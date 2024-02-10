# Web-Application-KMUTNB

หัวข้อที่เรียน

- Introdution to Web Programming
- HTML
- CSS
- Javascript
- Frontend Framework (Bootstrap)
- PHP
- Database (MySQL/MariaDB) + SQL
- XML, JSON ,AJAX
- จุดประสงค์ (สร้าง Web board ง่ายๆ ถึงปานกลางได้)

# STEP RUN HTML On XAMPP for PHP

1. VSCode > edit > run XAMPP > open Browser > http://localhost/(file_project)/(.html or .php) > debug
   https://127.0.0.1/(file_project)/(.html)

2. Prrogram: XAMPP > htdocs > create_directory

3. Browser: http://localhost/web-board-kakkak/index.php

# งานครั้งที่ 1 week1_9-12-2022

- ความรู้ที่จำเป็นในการเขียนเว็บ
  - HTML
  - PHP
  - Database
  - w3schools
- ตัวอย่างการแสดงที่ใช้งานบ่อย

# งานครั้งที่ 2 week2_16-12-2022

- ตัวอย่างการสร้างเว็บบอร์ดกากๆ
- หน้ากระทู้ (index.html)
- หน้าล็อคอิน (login.html)
- หน้าสมัครสมาชิก (register.html)

# งานฝึกจัดวาง CSS week3_22-12-2022

- ทดสอบการใช้งาน CSS เพื่อจัดหน้าเว็บบอร์ด

# งานครั้งที่ 3 week4_6-1-2023

- ใช้ภาษา PHP "POST" (verify.php)
  - หลังจากกรอกข้อมูล จะไปแสดงในไฟล์ .php พร้อมแสดงข้อมูลที่ถูกป้อน "ไอดี" และ "รหัสผ่าน" เข้ามา (ส่วนตัว)
- ใช้ภาษา PHP "GET" (post.php)
  - เมื่อคลิกที่ กระทู้ที่ 3 หรือ ลิงก์ที่ 3 จะแสดงข้อมูลของกระทู้ที่ 3 พร้อมข้อความ (สาธารณะ)

# งานครั้งที่ 4 week5_13-1-2023

- แก้ไขนามสกุลไฟล์เป็น (index.php) ใช้ภาษา PHP วนลูป 10 รอบในการสร้าง Bullet ของกระทู้ที่ 1 ถึง กระทู้ที่ 10
  - โดยแต่ละ Link ของกระทู้จะไปยังหน้า post.php?id=XX (ค่า XX คือหมายเลขของกระทู้)
- แก้ไขหน้า (verify.php) ใช้ภาษา PHP ให้ ตรวจสอบเงื่อนไข
  - ถ้า Login เป็น "admin" และ Password เป็น "ad1234" ให้แสดงว่า "ยินดีต้อนรับคุณ ADMIN"
  - ถ้า Login เป็น "member" และ Password เป็น "mem1234" ให้แสดงว่า "ยินดีต้อนรับคุณ MEMBER"
  - ถ้า Login และ Password ไม่ตรงกับเงื่อนไขใดเลย ให้แสดงข้อความว่า "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง"
- แก้ไขหน้า (post.php) ใช้ภาษา PHP โดยให้แสดงว่า กระทู้ที่ผู้ใช้กดเข้ามาดูนั้นเป็นกระทู้หมายเลข EVEN หรือ ODD
  - ลองดูว่าควรจะต้องแก้ไขหน้าเว็บไหนอีกเพื่อให้การทำงานโดยรวมยังถูกต้องอยู่

# งานครั้งที่ 5 week6_20-1-2023

- แก้ไขทุกไฟล์เป๋น .php แล้วแก้ link ต่างๆ ให้ครบ
- กำหนด Login เป็น admin (verify.php)
  - สร้างตัวแปร $\_SESSION['username'] = "admin";
  - สร้างตัวแปร $\_SESSION['role'] = "a";
  - สร้างตัวแปร $\_SESSION['id'] = session_id();
- กำหนด Login เป็น member
  - สร้างตัวแปร $\_SESSION['username'] = "member";
  - สร้างตัวแปร $\_SESSION['role'] = "m";
  - สร้างตัวแปร $\_SESSION['id'] = session_id();
- ถ้า Login ผ่าน (มี session index.php)
  - จะแสดงคำว่า ผู้ใช้งานระบบ : ค่าของ username ที่อยู่ใน session
  - link เข้าสู่ระบบ จะกลายเป็น ออกจากระบบ และเมื่อกดจะไปหน้า logout.php
  - มี link สร้างกระทู้ใหม่ ที่เมื่อกดจะไปหน้า newpost.php
  - ถ้าเข้ามาด้วย role 'a' จะมี link ลบ ที่ไปยังหน้า delete.php?id=เลขกระทู้
- logout.php
  - ให้ clear session ออกให้หมด
  - แล้ว ridirect หน้าไปยัง index.php
- delete.php

  - จะรับค่า id ผ่านทาง GET แล้วแสดงข้อความว่า ลบกระทู้หมายเลข 'ของกระทู้'
  - ต้องตรวจสอบสิทธ์์ ถ้า ไม่ใช้ admin แล้วพยายามแอบเข้าหน้า delete.php จะต้องถูกส่งไปยังหน้า index.php ทันที

- newpost.php

  - ถ้าไม่ได้ผ่านการ login เข้ามาแล้วผู้ใช้พยายามจะเข้าหน้า newpost.php จะต้อง redirect หน้าไปยัง index.php

- ทั้ง 3 หน้านี้ ต้องดักเอาไว้ว่า ถ้าได้ Login ผ่านมาแล้ว จะไม่สามารถเข้ามาหน้านี้ได้ จะพยายามเข้าจะกลับไปหน้า index.php ทันที

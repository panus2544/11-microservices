<?php

use Illuminate\Database\Seeder;

class AnswersSeeder extends Seeder
{
    public function run()
    {
        $ans_content = ['<p class="ql-align-center"><br></p><p class="ql-align-center">ข้านี้อยากจะพบคนในฝัน</p><p class="ql-align-center">มีรูปอันงามสง่าและสาสม</p><p class="ql-align-center">ตัวข้านี้อยากจะเอามาดอมดม</p><p class="ql-align-center">ขอพนมก้มกราบขอสักครา</p><p class="ql-align-center">และอีกอย่างที่ข้าพึ่งอยากได้</p><p class="ql-align-center">นั้นคือใบโควต้านั้นหนักหนา</p><p class="ql-align-center">ขอเพียงแค่วันหนึ่งนั้นได้มา</p><p class="ql-align-center">รับโควต้าเข้าต่อมหาลัย</p><p class="ql-align-center">คณะใดคณะหนึ่งขอสักที่</p><p class="ql-align-center">ในบางมดธนบุรีแดนส้มหวาน</p><p class="ql-align-center">ไม่ว่าจะไอที มัลติ ของสักงาน</p><p class="ql-align-center">ได้สุขสราญทีแคสรอบหนึ่งไง</p><p class="ql-align-center">ตัวข้านั้นจะขอเพียงเท่านี้</p><p class="ql-align-center">จงปราณีข้าเถิดข้าอยากได้</p><p class="ql-align-center">ไม่ว่าจะขอแลกด้วยสิ่งใด</p><p class="ql-align-center">จะยอมให้พลีกายแลชีวา</p><p class="ql-align-center"><br></p>',
            '<p>รู้แต่ว่ามันคือ ซูโดโค้ด ดคยคิกจะศึกษาเรียนรู้มันเบื้องต้นผ่านยูทูปแต่มิได้ความอันใด เพราะเวลาสงสัยมิมีใครตอบได้ จึงอยากจะรู้งิธีทำ แต่ถ้าได้ค่ายก็อยากจะให้พี่ๆช่วยสอนเป็นเบื้องต้น  เผื่อได้ความบ้างไปพัฒนางานวิจัยต่างๆก็เป็นอันดี</p>',
            '<p>อันตัวข้าขอเบิกเทคโนโลยีใหม่</p><p>ที่ไฉไลงน่าทึ่งเป็นหนักหนา</p><p>นั้นก็คือเทคโนโลยี ar</p><p>แสกนหนังสือหนาขึ้นเป็นสื่อสอนใจ</p><p><br></p><p>อันตัวเรานี้ก็จะเสนอ การใช้เทคโนโลยีที่มีมานานแล้ว แต่ยังคงไม่แพร่หลาย ให้กับชาวลงกา ได้มีหนังสือวิเศษที่สามารถนำสมาร์ทโฟนแสกนผ่านแอพก็จะสามารถได้ยินได้เห็นหนังสือที่พูดได้ อนิเมชั่นขยับได้อย่างน่ามหัศจรรย์ใจยิ่งนัก ชาวกรุงลงกา ก็จะไม่เบื่อหน่ายกับการอ่านหนังสือที่มีแต่ตัวหนังสืออีกต่อไปปปปป (เสียงเอคโค่)</p>',
            '<p>อันตัวน้องนี้จะอยู่กับเจ้าวานร เพราะเจ้ายักษา ใหญ่แต่ตัวแต่สมองนั้นใหญ่กระไรไม่ ข้านั้นจะได้มิต้องทำอันใดมากเพราะหน้าเหมือนลิง เพียงแค่เสริมหายให้ข้าเพียงน้อยนิด เจ้าวานรทั้งหลายก็จะรับข้าอย่างง่ายเพียงนิดเดียว ข้าก็จะใช้holo gram ทำหางของข้าติดตัวไว้ตลอดเวลา 555 แล้วก็จะช่วยเจ้าวานรนั้นทุบรถเจ้ายักษีที่จอดขวางหน้าต้นไม้งันหล่ะ รับลองเจ้าวานรต้องยอมรับในตัวน้องแน่ๆ</p>',
            '<p>ข้าไม่ยกให้ใครทั้งสิ้นแต่ตัวข้านี้ จะแบ่งน้ำให้พอกะบจำนวนในกองทัพ คนละนิดคนละหน่อยแล้วปลุกระดมใจว่า เราจะต้องไปกินน้ำให้อิ่มท้องอีกครั้งก็ต่อเมื่อชนะศัตรู </p>'];
        $wip_id = [110001];
        //get question_id from question
        $question_id = [1, 2, 3, 4, 5];
        for ($i = 0; $i < 1; $i++) {
            for ($j = 0; $j < 5; $j++) {
                DB::table('answers')->insert([
                    'question_id' => $question_id[$j], //get id from question
                    'wip_id' => $wip_id[$i],
                    'ans_content' => $ans_content[$j],
                ]);
            }
        }

    }
}

<?php

namespace Database\Seeders;

use App\Models\Tasbih;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TasbihSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $tasbihs = [
            ['title' => 'سبحان الله', 'reward' => 'تُحط الخطايا', 'count_recommended' => 100],
            ['title' => 'الحمد لله', 'reward' => 'تملأ الميزان', 'count_recommended' => 100],
            ['title' => 'الله أكبر', 'reward' => 'خير مما طلعت عليه الشمس', 'count_recommended' => 100],
            ['title' => 'لا إله إلا الله', 'reward' => 'أفضل الذكر', 'count_recommended' => 100],
            ['title' => 'سبحان الله وبحمده', 'reward' => 'غُفرت ذنوبه ولو كانت مثل زبد البحر', 'count_recommended' => 100],
            ['title' => 'سبحان الله العظيم', 'reward' => 'ثقيلة في الميزان', 'count_recommended' => 100],
            ['title' => 'لا حول ولا قوة إلا بالله', 'reward' => 'كنز من كنوز الجنة', 'count_recommended' => 100],
            ['title' => 'أستغفر الله', 'reward' => 'سبب لمغفرة الذنوب', 'count_recommended' => 100],
            ['title' => 'اللهم اغفر لي', 'reward' => 'طلب المغفرة والرحمة', 'count_recommended' => 100],
            ['title' => 'اللهم ارحمني', 'reward' => 'تنال بها رحمة الله', 'count_recommended' => 100],

            ['title' => 'اللهم تب علي', 'reward' => 'قبول التوبة', 'count_recommended' => 100],
            ['title' => 'اللهم ارزقني', 'reward' => 'طلب الرزق والبركة', 'count_recommended' => 100],
            ['title' => 'اللهم اهدني', 'reward' => 'الهداية للصراط المستقيم', 'count_recommended' => 100],
            ['title' => 'اللهم عافني', 'reward' => 'العافية في الدين والدنيا', 'count_recommended' => 100],
            ['title' => 'اللهم اشفني', 'reward' => 'طلب الشفاء من الله', 'count_recommended' => 100],
            ['title' => 'اللهم ارزقني الجنة', 'reward' => 'سؤال دخول الجنة', 'count_recommended' => 10],
            ['title' => 'اللهم أجرني من النار', 'reward' => 'النجاة من النار', 'count_recommended' => 10],
            ['title' => 'اللهم ثبت قلبي على دينك', 'reward' => 'الثبات على الإيمان', 'count_recommended' => 50],
            ['title' => 'حسبي الله ونعم الوكيل', 'reward' => 'كفاية الله للعبد', 'count_recommended' => 7],
            ['title' => 'حسبي الله لا إله إلا هو عليه توكلت وهو رب العرش العظيم', 'reward' => 'يكفيه الله ما أهمه', 'count_recommended' => 7],

            ['title' => 'رضيت بالله رباً وبالإسلام ديناً وبمحمد ﷺ نبياً', 'reward' => 'يرضيه الله يوم القيامة', 'count_recommended' => 3],
            ['title' => 'اللهم صلِّ على محمد', 'reward' => 'يصلي الله عليه بها عشراً', 'count_recommended' => 10],
            ['title' => 'اللهم إني أسألك العفو والعافية', 'reward' => 'خير دعاء في الدنيا والآخرة', 'count_recommended' => 50],
            ['title' => 'اللهم أصلح لي شأني كله', 'reward' => 'صلاح الحال كله', 'count_recommended' => 50],
            ['title' => 'اللهم اجعلني من الصالحين', 'reward' => 'الالتحاق بعباد الله الصالحين', 'count_recommended' => 50],
            ['title' => 'اللهم اجعلني من الذاكرين', 'reward' => 'يُكتب من الذاكرين الله كثيراً', 'count_recommended' => 50],
            ['title' => 'اللهم اجعل القرآن ربيع قلبي', 'reward' => 'راحة القلب ونوره', 'count_recommended' => 10],
            ['title' => 'اللهم نور قبري', 'reward' => 'نور في القبر', 'count_recommended' => 10],
            ['title' => 'اللهم وسع قبري', 'reward' => 'سعة وطمأنينة في القبر', 'count_recommended' => 10],
            ['title' => 'اللهم اغفر لوالدي', 'reward' => 'بر الوالدين بعد موتهما', 'count_recommended' => 10],

            ['title' => 'اللهم ارحم والدي', 'reward' => 'رحمة للوالدين', 'count_recommended' => 10],
            ['title' => 'اللهم اجمعني بأهلي في الجنة', 'reward' => 'مرافقة الأهل في الجنة', 'count_recommended' => 10],
            ['title' => 'اللهم بارك لي في رزقي', 'reward' => 'بركة في الرزق', 'count_recommended' => 50],
            ['title' => 'اللهم بارك لي في وقتي', 'reward' => 'بركة في العمر والوقت', 'count_recommended' => 50],
            ['title' => 'اللهم بارك لي في صحتي', 'reward' => 'بركة في الصحة', 'count_recommended' => 50],
            ['title' => 'يا حي يا قيوم برحمتك أستغيث', 'reward' => 'تفريج الكرب', 'count_recommended' => 50],
            ['title' => 'اللهم يا مقلب القلوب ثبت قلبي على دينك', 'reward' => 'ثبات القلب على الحق', 'count_recommended' => 50],
            ['title' => 'اللهم ارزقني الإخلاص', 'reward' => 'قبول العمل', 'count_recommended' => 50],
            ['title' => 'اللهم اجعل عملي خالصاً لوجهك الكريم', 'reward' => 'إخلاص النية', 'count_recommended' => 50],
            ['title' => 'سبحان الله عدد خلقه', 'reward' => 'أجر عظيم بعدد الخلق', 'count_recommended' => 3],

            ['title' => 'سبحان الله رضا نفسه', 'reward' => 'أجر بقدر رضا الله', 'count_recommended' => 3],
            ['title' => 'سبحان الله زنة عرشه', 'reward' => 'أجر عظيم بوزن العرش', 'count_recommended' => 3],
            ['title' => 'سبحان الله مداد كلماته', 'reward' => 'أجر بعدد كلمات الله', 'count_recommended' => 3],

            ['title' => 'ربنا آتنا في الدنيا حسنة وفي الآخرة حسنة وقنا عذاب النار', 'reward' => 'دعاء جامع لخير الدنيا والآخرة', 'count_recommended' => 10],

            ['title' => 'اللهم اجعلني من أهل الفردوس الأعلى', 'reward' => 'طلب أعلى درجات الجنة', 'count_recommended' => 10],
            ['title' => 'اللهم اجعلني من عتقائك من النار', 'reward' => 'العتق من النار', 'count_recommended' => 10],
            ['title' => 'اللهم اجعل لساني عامراً بذكرك', 'reward' => 'دوام الذكر', 'count_recommended' => 100],
            ['title' => 'اللهم ارزقني قلباً سليماً', 'reward' => 'سلامة القلب من الآفات', 'count_recommended' => 50],
            ['title' => 'اللهم لا تحرمني لذة النظر إلى وجهك الكريم', 'reward' => 'أعظم نعيم في الجنة', 'count_recommended' => 10],
        ];
        foreach ($tasbihs as $tasbih) {
            Tasbih::create($tasbih);
        }
    }
}

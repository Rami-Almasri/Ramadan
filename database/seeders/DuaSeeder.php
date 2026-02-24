<?php

namespace Database\Seeders;

use App\Models\Dua;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DuaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $duas = [

            ['title' => 'دعاء الرزق', 'content' => 'اللهم ارزقني رزقاً حلالاً طيباً مباركاً فيه', 'category' => 'rizq', 'count_recommended' => 10],
            ['title' => 'دعاء البركة', 'content' => 'اللهم بارك لي فيما رزقتني', 'category' => 'rizq', 'count_recommended' => 10],
            ['title' => 'دعاء سعة الرزق', 'content' => 'اللهم اكفني بحلالك عن حرامك وأغنني بفضلك عمن سواك', 'category' => 'rizq', 'count_recommended' => 7],

            ['title' => 'دعاء المغفرة', 'content' => 'رب اغفر لي وتب علي إنك أنت التواب الرحيم', 'category' => 'forgiveness', 'count_recommended' => 10],
            ['title' => 'دعاء الاستغفار', 'content' => 'أستغفر الله العظيم الذي لا إله إلا هو الحي القيوم وأتوب إليه', 'category' => 'forgiveness', 'count_recommended' => 100],
            ['title' => 'دعاء العفو', 'content' => 'اللهم إنك عفو تحب العفو فاعفُ عني', 'category' => 'forgiveness', 'count_recommended' => 10],

            ['title' => 'دعاء الشفاء', 'content' => 'اللهم اشفني شفاءً لا يغادر سقماً', 'category' => 'healing', 'count_recommended' => 7],
            ['title' => 'دعاء العافية', 'content' => 'اللهم إني أسألك العفو والعافية في الدنيا والآخرة', 'category' => 'healing', 'count_recommended' => 10],
            ['title' => 'دعاء رفع البلاء', 'content' => 'اللهم اصرف عني البلاء والوباء وسوء الأسقام', 'category' => 'healing', 'count_recommended' => 7],

            ['title' => 'دعاء الهداية', 'content' => 'اللهم اهدني وسددني', 'category' => 'guidance', 'count_recommended' => 10],
            ['title' => 'دعاء الثبات', 'content' => 'يا مقلب القلوب ثبت قلبي على دينك', 'category' => 'guidance', 'count_recommended' => 7],
            ['title' => 'دعاء التوفيق', 'content' => 'اللهم وفقني لما تحب وترضى', 'category' => 'guidance', 'count_recommended' => 10],

            ['title' => 'دعاء الحفظ', 'content' => 'اللهم احفظني بعينك التي لا تنام', 'category' => 'protection', 'count_recommended' => 7],
            ['title' => 'دعاء الكرب', 'content' => 'لا إله إلا أنت سبحانك إني كنت من الظالمين', 'category' => 'protection', 'count_recommended' => 10],
            ['title' => 'دعاء الهم', 'content' => 'اللهم إني أعوذ بك من الهم والحزن', 'category' => 'protection', 'count_recommended' => 7],

            ['title' => 'دعاء للوالدين', 'content' => 'رب ارحمهما كما ربياني صغيراً', 'category' => 'parents', 'count_recommended' => 10],
            ['title' => 'دعاء مغفرة للوالدين', 'content' => 'رب اغفر لي ولوالدي', 'category' => 'parents', 'count_recommended' => 10],
            ['title' => 'دعاء بر الوالدين', 'content' => 'اللهم اجزِ والديّ عني خير الجزاء', 'category' => 'parents', 'count_recommended' => 7],

            ['title' => 'دعاء دخول الجنة', 'content' => 'اللهم إني أسألك الجنة وأعوذ بك من النار', 'category' => 'general', 'count_recommended' => 10],
            ['title' => 'دعاء حسن الخاتمة', 'content' => 'اللهم ارزقني حسن الخاتمة', 'category' => 'general', 'count_recommended' => 7],
            ['title' => 'دعاء الرضا', 'content' => 'رضيت بالله رباً وبالإسلام ديناً وبمحمد ﷺ نبياً', 'category' => 'general', 'count_recommended' => 3],

            ['title' => 'دعاء تفريج الهم', 'content' => 'حسبي الله ونعم الوكيل', 'category' => 'protection', 'count_recommended' => 7],
            ['title' => 'دعاء الكفاية', 'content' => 'حسبي الله لا إله إلا هو عليه توكلت وهو رب العرش العظيم', 'category' => 'protection', 'count_recommended' => 7],
            ['title' => 'دعاء التوبة', 'content' => 'اللهم تب علي توبة نصوحاً', 'category' => 'forgiveness', 'count_recommended' => 10],

            ['title' => 'دعاء صلاح الحال', 'content' => 'اللهم أصلح لي شأني كله', 'category' => 'general', 'count_recommended' => 10],
            ['title' => 'دعاء النور', 'content' => 'اللهم اجعل في قلبي نوراً', 'category' => 'general', 'count_recommended' => 7],
            ['title' => 'دعاء العلم', 'content' => 'رب زدني علماً', 'category' => 'guidance', 'count_recommended' => 10],

            ['title' => 'دعاء الشكر', 'content' => 'اللهم أعني على ذكرك وشكرك وحسن عبادتك', 'category' => 'general', 'count_recommended' => 10],
            ['title' => 'دعاء القلب السليم', 'content' => 'اللهم ارزقني قلباً سليماً', 'category' => 'general', 'count_recommended' => 10],
            ['title' => 'دعاء الطمأنينة', 'content' => 'اللهم ارزقني نفساً مطمئنة', 'category' => 'general', 'count_recommended' => 10],

            ['title' => 'دعاء الصبر', 'content' => 'اللهم ارزقني الصبر', 'category' => 'general', 'count_recommended' => 10],
            ['title' => 'دعاء الشكر الدائم', 'content' => 'اللهم ارزقني الشكر الدائم', 'category' => 'general', 'count_recommended' => 10],
            ['title' => 'دعاء حب الله', 'content' => 'اللهم إني أسألك حبك وحب من يحبك', 'category' => 'general', 'count_recommended' => 7],

            ['title' => 'دعاء العمل الصالح', 'content' => 'اللهم تقبل عملي واجعله خالصاً لوجهك الكريم', 'category' => 'general', 'count_recommended' => 7],
            ['title' => 'دعاء القبول', 'content' => 'ربنا تقبل منا إنك أنت السميع العليم', 'category' => 'general', 'count_recommended' => 10],
            ['title' => 'دعاء الرحمة', 'content' => 'اللهم ارحمني برحمتك الواسعة', 'category' => 'general', 'count_recommended' => 10],

            ['title' => 'دعاء الغنى', 'content' => 'اللهم إني أسألك الغنى والعفاف', 'category' => 'rizq', 'count_recommended' => 7],
            ['title' => 'دعاء البر', 'content' => 'اللهم اجعلني من عبادك الصالحين', 'category' => 'general', 'count_recommended' => 10],
            ['title' => 'دعاء التيسير', 'content' => 'اللهم لا سهل إلا ما جعلته سهلاً', 'category' => 'general', 'count_recommended' => 7],

            ['title' => 'دعاء ستر العيوب', 'content' => 'اللهم استر عيوبي وآمن روعاتي', 'category' => 'protection', 'count_recommended' => 7],
            ['title' => 'دعاء تفريج الكرب', 'content' => 'اللهم فرّج همي ويسّر أمري', 'category' => 'protection', 'count_recommended' => 7],
            ['title' => 'دعاء البركة في الوقت', 'content' => 'اللهم بارك لي في وقتي', 'category' => 'rizq', 'count_recommended' => 10],

            ['title' => 'دعاء صلاح الذرية', 'content' => 'اللهم أصلح لي ذريتي', 'category' => 'parents', 'count_recommended' => 7],
            ['title' => 'دعاء الثبات على الطاعة', 'content' => 'اللهم أعني على طاعتك', 'category' => 'guidance', 'count_recommended' => 10],
            ['title' => 'دعاء النجاة', 'content' => 'اللهم نجّني من الفتن ما ظهر منها وما بطن', 'category' => 'protection', 'count_recommended' => 7],

            ['title' => 'دعاء الفرج', 'content' => 'اللهم اجعل لي من كل هم فرجاً ومن كل ضيق مخرجاً', 'category' => 'protection', 'count_recommended' => 7],
            ['title' => 'دعاء الستر', 'content' => 'اللهم استرني فوق الأرض وتحت الأرض ويوم العرض', 'category' => 'protection', 'count_recommended' => 7],
            ['title' => 'دعاء الرضا بالقضاء', 'content' => 'اللهم رضّني بقضائك وبارك لي فيما قدرته لي', 'category' => 'general', 'count_recommended' => 7],

        ];

        foreach ($duas as $dua) {
            Dua::create($dua);
        }
    }
}

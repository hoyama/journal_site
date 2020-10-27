<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                 // paramに配列を代入
    $param = [[
        'title' =>  'ゆで過程におけるスパゲティの芯の状態変化とアルデンテの評価',
        'body'  =>   'デュラム小麦のセモリナ粉ユ00％使用，標準ゆで時間11分のスパゲティを用いて，
                    ゆで時間を5〜20分まで変えて試料を調製し，アルデンテについての官能評価，水分含量・ゆで歩留測定，
                    拡大写真撮影，糊化度測定，破断試験を行い，以下の結果を得た。1）官能検査の結果，9，10，11分ゆでが「アルデンテである」と評価され，
                    10，ll分ゆでが「少し芯がある」，「好ましい」と評価されたので，好ましいアルデンテは10，11分ゆでであった。2）日本人のアルデンテの10，11分ゆでは，
                    ゆで歩留2．3〜2．4，水分含量63〜64％に相当し，これらは中心の自い芯がなくなった状態で，糊化度は90％以上であった。イタリア人のアルデンテはゆで歩留2．1−2．2とすると，
                    ゆで時間8〜9分，水分含量約60％に相当し，中心にまだら状に白い芯が残り，糊化度は約80％であった。3）破断曲線を微分すると，ゆで時間の違いによってダブルピーク，肩，シングルピークの3つに分類された。
                    日本人が好む10，11分ゆではシングルピークの形で，イタリア人が好む8，9分ゆでは肩がある形であった。破断曲線の微分はスパゲティの芯のゆで状態の指標になった。4）20分放置により，拡大写真撮影では中心部への水分移動が見られたが，
                    糊化度はゆで直後と差が認められなかった。また破断曲線の肩はシングルピークになり，破断特性値は全体的に低下した。'
    ],
    [
        'title' =>  '市販わさびの蒸散状態による抗菌作用',
        'body'  =>   '日本人が古くから親しんできた香辛料の中で，寿司や刺身に欠かせない薬味といえばわさびである。わさびの細菌に対する抗菌効果を確かめるため，
                    蒸散暴露（気相法）により大腸菌と黄色ブドウ球菌を用いて実験を行った。暴露する温度条件を4℃，室温（25℃），35℃で抗菌効果を比較すると，
                    チューブ入1功冂工わさび，生わさびのいずれも暴露温度が35℃時に抗菌効果が高かった。わさびに7日間継続的に暴露し続けた結果，
                    生わさびは途巾で菌の発育がみられたが，チューブ入り加工わさびは菌の発育はみられず，細菌に対する増殖抑制と共に殺菌効果があることがわかった。
                    菌数減少の推移を定量的に測定したところ，暴露開始5時間後から徐々に菌数が減少し48時間後には生菌は全く認められなかった。わさびの主な抗菌成分は揮発性のアリルイソチオシァネートといわれる。
                    この実験からも寒天培地に触れさせず蒸気で接触させる方法で抗菌効果が強く認められたと考えられる。'
    ],
    [
        'title' =>  '日本人がおもしろいと感じる話の傾向 : 日本一おもしろい話プロジェクト',
        'body'  =>  '欧米などの低コンテキストな多民族社会と、日本のような高コンテキスト社会では人々の間で語られるジョークや笑い話の種類およびスタイルが異なる。
                    コミュニケーションにおいて必要とされる要素がそこにはあらわれると思われる。そこで2010年4月から2011年3月の1年間で「日本一おもしろい話」プロジェクトを運営し、
                    サイト上で日本各地からおもしろい話を募集した。毎週、投稿された話をサイトに掲載し、おもしろいと思う話に投票してもらうというシステムをとり、日本人がおもしろいと感じる話を分析することを試みた。
                    その結果、560の有効な投稿があり、1949票の投票がされた。投票により、毎月のトップ10までを決定し、それらの話の分類と分析を行ったところ、多くが投稿者の体験談であることがわかった。全体としては言い間違いや同音異義語を使った、
                    言葉に関する話が最も多かった。また、年代でみるとおもしろい話の多くは40代、50代、30代からの投稿であった。性別でみると、女性は突発的な偶然から起きる言い間違い・聞き間違いなどに関する話が最も多く、男性からの投稿は作り込まれた言葉遊び、
                    文化・社会を反映した笑い話などが多いことがわかった。今回のプロジェクトで日本人のユーモアの傾向が一部明確になり、また今後の研究の貴重な資料になると考えている。'
    ]];
    // DB::table->insertでレコードの登録
    DB::table('articles')->insert($param);
    }
}

<?php
$con = mysql_connect('localhost','root');
mysql_select_db('testdata');
$q1 = "create index news_h on news(headline);";
$r1 = mysql_query($q1,$con);
$q2 = "create index news_l on news(link);";
$r2 = mysql_query($q2,$con);
$q3 = "create index modified_h on modified(headline);";
$r3 = mysql_query($q3,$con);
$q4 = "create index modified_l on modified(link);";
$r4 = mysql_query($q4,$con);
$q5 = "create index article_h on article(headline);";
$r5 = mysql_query($q5,$con);
$q6 = "create index article_l on article(link);";
$r6 = mysql_query($q6,$con);
$q7 = "create index articlee_h on articlee(headline);";
$r7 = mysql_query($q7,$con);
$q8 = "create index articlee_l on articlee(link);";
$r8 = mysql_query($q8,$con);
$q9 = "create index articlet_h on articlet(headline);";
$r9 = mysql_query($q9,$con);
$q10 = "create index articlet_l on articlet(link);";
$r10 = mysql_query($q10,$con);
$q11 = "create index articlep_h on articlep(headline);";
$r11 = mysql_query($q11,$con);
$q12 = "create index articlep_l on articlep(link);";
$r12 = mysql_query($q12,$con);
$q13 = "create index blog_h on blog(headline);";
$r13 = mysql_query($q13,$con);
$q14 = "create index blog_l on blog(link);";
$r14 = mysql_query($q14,$con);
$q15 = "create index bloge_h on bloge(headline);";
$r15 = mysql_query($q15,$con);
$q16 = "create index bloge_l on bloge(link);";
$r16 = mysql_query($q16,$con);
$q17 = "create index blogt_h on blogt(headline);";
$r17 = mysql_query($q17,$con);
$q18 = "create index blogt_l on blogt(link);";
$r18 = mysql_query($q18,$con);
$q19 = "create index blogp_h on blogp(headline);";
$r19 = mysql_query($q19,$con);
$q20 = "create index blogp_l on blogp(link);";
$r20 = mysql_query($q20,$con);
$q21 = "create index buisness_h on buisness(headline);";
$r21 = mysql_query($q21,$con);
$q22 = "create index buisness_l on buisness(link);";
$r22 = mysql_query($q22,$con);
$q23 = "create index buisnesse_h on buisnesse(headline);";
$r23 = mysql_query($q23,$con);
$q24 = "create index buisnesse_l on buisnesse(link);";
$r24 = mysql_query($q24,$con);
$q25 = "create index buisnesst_h on buisnesst(headline);";
$r25 = mysql_query($q25,$con);
$q26 = "create index buisnesst_l on buisnesst(link);";
$r26 = mysql_query($q26,$con);
$q27 = "create index buisnessp_h on buisnessp(headline);";
$r27 = mysql_query($q27,$con);
$q28 = "create index buisnessp_l on buisnessp(link);";
$r28 = mysql_query($q28,$con);
$q29 = "create index city_h on city(headline);";
$r29 = mysql_query($q29,$con);
$q30 = "create index city_l on city(link);";
$r30 = mysql_query($q30,$con);
$q31 = "create index citye_h on citye(headline);";
$r31 = mysql_query($q31,$con);
$q32 = "create index citye_l on citye(link);";
$r32 = mysql_query($q32,$con);
$q33 = "create index cityt_h on cityt(headline);";
$r33 = mysql_query($q33,$con);
$q34 = "create index cityt_l on cityt(link);";
$r34 = mysql_query($q34,$con);
$q35 = "create index cityp_h on cityp(headline);";
$r35 = mysql_query($q35,$con);
$q36 = "create index cityp_l on cityp(link);";
$r36 = mysql_query($q36,$con);
$q37 = "create index companies_h on companies(headline);";
$r37 = mysql_query($q37,$con);
$q38 = "create index companies_l on companies(link);";
$r38 = mysql_query($q38,$con);
$q39 = "create index companiese_h on companiese(headline);";
$r39 = mysql_query($q39,$con);
$q40 = "create index companiese_l on companiese(link);";
$r40 = mysql_query($q40,$con);
$q41 = "create index companiest_h on companiest(headline);";
$r41 = mysql_query($q41,$con);
$q42 = "create index companiest_l on companiest(link);";
$r42 = mysql_query($q42,$con);
$q43 = "create index companiesp_h on companiesp(headline);";
$r43 = mysql_query($q43,$con);
$q44 = "create index companiesp_l on companiesp(link);";
$r44 = mysql_query($q44,$con);
$q45 = "create index crime_h on crime(headline);";
$r45 = mysql_query($q45,$con);
$q46 = "create index crime_l on crime(link);";
$r46 = mysql_query($q46,$con);
$q47 = "create index crimee_h on crimee(headline);";
$r47 = mysql_query($q47,$con);
$q48 = "create index crimee_l on crimee(link);";
$r48 = mysql_query($q48,$con);
$q49 = "create index crimet_h on crimet(headline);";
$r49 = mysql_query($q49,$con);
$q50 = "create index crimet_l on crimet(link);";
$r50 = mysql_query($q50,$con);
$q51 = "create index crimep_h on crimep(headline);";
$r51 = mysql_query($q51,$con);
$q52 = "create index crimep_l on crimep(link);";
$r52 = mysql_query($q52,$con);
$q53 = "create index education_h on education(headline);";
$r53 = mysql_query($q53,$con);
$q54 = "create index education_l on education(link);";
$r54 = mysql_query($q54,$con);
$q55 = "create index educatione_h on educatione(headline);";
$r55 = mysql_query($q55,$con);
$q56 = "create index educatione_l on educatione(link);";
$r56 = mysql_query($q56,$con);
$q57 = "create index educationt_h on educationt(headline);";
$r57 = mysql_query($q57,$con);
$q58 = "create index educationt_l on educationt(link);";
$r58 = mysql_query($q58,$con);
$q59 = "create index educationp_h on educationp(headline);";
$r59 = mysql_query($q59,$con);
$q60 = "create index educationp_l on educationp(link);";
$r60 = mysql_query($q60,$con);
$q61 = "create index economics_h on economics(headline);";
$r61 = mysql_query($q61,$con);
$q62 = "create index economics_l on economics(link);";
$r62 = mysql_query($q62,$con);
$q63 = "create index economicse_h on economicse(headline);";
$r63 = mysql_query($q63,$con);
$q64 = "create index economicse_l on economicse(link);";
$r64 = mysql_query($q64,$con);
$q65 = "create index economicst_h on economicst(headline);";
$r65 = mysql_query($q65,$con);
$q66 = "create index economicst_l on economicst(link);";
$r66 = mysql_query($q66,$con);
$q67 = "create index economicsp_h on economicsp(headline);";
$r67 = mysql_query($q67,$con);
$q68 = "create index economicsp_l on economicsp(link);";
$r68 = mysql_query($q68,$con);
$q69 = "create index entertainment_h on entertainment(headline);";
$r69 = mysql_query($q69,$con);
$q70 = "create index entertainment_l on entertainment(link);";
$r70 = mysql_query($q70,$con);
$q71 = "create index entertainmente_h on entertainmente(headline);";
$r71 = mysql_query($q71,$con);
$q72 = "create index entertainmente_l on entertainmente(link);";
$r72 = mysql_query($q72,$con);
$q73 = "create index entertainmentt_h on entertainmentt(headline);";
$r73 = mysql_query($q73,$con);
$q74 = "create index entertainmentt_l on entertainmentt(link);";
$r74 = mysql_query($q74,$con);
$q75 = "create index entertainmentp_h on entertainmentp(headline);";
$r75 = mysql_query($q75,$con);
$q76 = "create index entertainmentp_l on entertainmentp(link);";
$r76 = mysql_query($q76,$con);
$q77 = "create index environment_h on environment(headline);";
$r77 = mysql_query($q77,$con);
$q78 = "create index environment_l on environment(link);";
$r78 = mysql_query($q78,$con);
$q79 = "create index environmente_h on environmente(headline);";
$r79 = mysql_query($q79,$con);
$q80 = "create index environmente_l on environmente(link);";
$r80 = mysql_query($q80,$con);
$q81 = "create index environmentt_h on environmentt(headline);";
$r81 = mysql_query($q81,$con);
$q82 = "create index environmentt_l on environmentt(link);";
$r82 = mysql_query($q82,$con);
$q83 = "create index environmentp_h on environmentp(headline);";
$r83 = mysql_query($q83,$con);
$q84 = "create index environmentp_l on environmentp(link);";
$r84 = mysql_query($q84,$con);
$q85 = "create index events_h on events(headline);";
$r85 = mysql_query($q85,$con);
$q86 = "create index events_l on events(link);";
$r86 = mysql_query($q86,$con);
$q87 = "create index eventse_h on eventse(headline);";
$r87 = mysql_query($q87,$con);
$q88 = "create index eventse_l on eventse(link);";
$r88 = mysql_query($q88,$con);
$q89 = "create index eventst_h on eventst(headline);";
$r89 = mysql_query($q89,$con);
$q90 = "create index eventst_l on eventst(link);";
$r90 = mysql_query($q90,$con);
$q91 = "create index eventsp_h on eventsp(headline);";
$r91 = mysql_query($q91,$con);
$q92 = "create index eventsp_l on eventsp(link);";
$r92 = mysql_query($q92,$con);
$q93 = "create index extra_h on extra(headline);";
$r93 = mysql_query($q93,$con);
$q94 = "create index extra_l on extra(link);";
$r94 = mysql_query($q94,$con);
$q95 = "create index extrae_h on extrae(headline);";
$r95 = mysql_query($q95,$con);
$q96 = "create index extrae_l on extrae(link);";
$r96 = mysql_query($q96,$con);
$q97 = "create index extrat_h on extrat(headline);";
$r97 = mysql_query($q97,$con);
$q98 = "create index extrat_l on extrat(link);";
$r98 = mysql_query($q98,$con);
$q99 = "create index extrap_h on extrap(headline);";
$r99 = mysql_query($q99,$con);
$q100 = "create index extrap_l on extrap(link);";
$r100 = mysql_query($q100,$con);
$q101 = "create index health_h on health(headline);";
$r101 = mysql_query($q101,$con);
$q102 = "create index health_l on health(link);";
$r102 = mysql_query($q102,$con);
$q103 = "create index healthe_h on healthe(headline);";
$r103 = mysql_query($q103,$con);
$q104 = "create index healthe_l on healthe(link);";
$r104 = mysql_query($q104,$con);
$q105 = "create index healtht_h on healtht(headline);";
$r105 = mysql_query($q105,$con);
$q106 = "create index healtht_l on healtht(link);";
$r106 = mysql_query($q106,$con);
$q107 = "create index healthp_h on healthp(headline);";
$r107 = mysql_query($q107,$con);
$q108 = "create index healthp_l on healthp(link);";
$r108 = mysql_query($q108,$con);
$q109 = "create index india_h on india(headline);";
$r109 = mysql_query($q109,$con);
$q110 = "create index india_l on india(link);";
$r110 = mysql_query($q110,$con);
$q111 = "create index indiae_h on indiae(headline);";
$r111 = mysql_query($q111,$con);
$q112 = "create index indiae_l on indiae(link);";
$r112 = mysql_query($q112,$con);
$q113 = "create index indiat_h on indiat(headline);";
$r113 = mysql_query($q113,$con);
$q114 = "create index indiat_l on indiat(link);";
$r114 = mysql_query($q114,$con);
$q115 = "create index indiap_h on indiap(headline);";
$r115 = mysql_query($q115,$con);
$q116 = "create index indiap_l on indiap(link);";
$r116 = mysql_query($q116,$con);
$q117 = "create index lifestyle_h on lifestyle(headline);";
$r117 = mysql_query($q117,$con);
$q118 = "create index lifestyle_l on lifestyle(link);";
$r118 = mysql_query($q118,$con);
$q119 = "create index lifestylee_h on lifestylee(headline);";
$r119 = mysql_query($q118,$con);
$q120 = "create index lifestylee_l on lifestylee(link);";
$r120 = mysql_query($q120,$con);
$q121 = "create index lifestylet_h on lifestylet(headline);";
$r121 = mysql_query($q121,$con);
$q122 = "create index lifestylet_l on lifestylet(link);";
$r122 = mysql_query($q122,$con);
$q123 = "create index lifestylep_h on lifestylep(headline);";
$r123 = mysql_query($q123,$con);
$q124 = "create index lifestylep_l on lifestylep(link);";
$r124 = mysql_query($q124,$con);
$q125 = "create index multimedia_h on multimedia(headline);";
$r125 = mysql_query($q125,$con);
$q126 = "create index multimedia_l on multimedia(link);";
$r126 = mysql_query($q126,$con);
$q127 = "create index multimediae_h on multimediae(headline);";
$r127 = mysql_query($q127,$con);
$q128 = "create index multimediae_l on multimediae(link);";
$r128 = mysql_query($q128,$con);
$q129 = "create index multimediat_h on multimediat(headline);";
$r129 = mysql_query($q128,$con);
$q130 = "create index multimediat_l on multimediat(link);";
$r130 = mysql_query($q130,$con);
$q131 = "create index multimediap_h on multimediap(headline);";
$r131 = mysql_query($q131,$con);
$q132 = "create index multimediap_l on multimediap(link);";
$r132 = mysql_query($q132,$con);
$q133 = "create index politics_h on politics(headline);";
$r133 = mysql_query($q133,$con);
$q134 = "create index politics_l on politics(link);";
$r134 = mysql_query($q134,$con);
$q135 = "create index politicse_h on politicse(headline);";
$r135 = mysql_query($q135,$con);
$q136 = "create index politicse_l on politicse(link);";
$r136 = mysql_query($q136,$con);
$q137 = "create index politicst_h on politicst(headline);";
$r137 = mysql_query($q137,$con);
$q138 = "create index politicst_l on politicst(link);";
$r138 = mysql_query($q138,$con);
$q139 = "create index politicsp_h on politicsp(headline);";
$r139 = mysql_query($q139,$con);
$q140 = "create index politicsp_l on politicsp(link);";
$r140 = mysql_query($q140,$con);
$q141 = "create index opinion_h on opinion(headline);";
$r141 = mysql_query($q141,$con);
$q142 = "create index opinion_l on opinion(link);";
$r142 = mysql_query($q142,$con);
$q143 = "create index opinione_h on opinione(headline);";
$r143 = mysql_query($q143,$con);
$q144 = "create index opinione_l on opinione(link);";
$r144 = mysql_query($q144,$con);
$q145 = "create index opiniont_h on opiniont(headline);";
$r145 = mysql_query($q145,$con);
$q146 = "create index opiniont_l on opiniont(link);";
$r146 = mysql_query($q146,$con);
$q147 = "create index opinionp_h on opinionp(headline);";
$r147 = mysql_query($q147,$con);
$q148 = "create index opinionp_l on opinionp(link);";
$r148 = mysql_query($q148,$con);
$q149 = "create index sports_h on sports(headline);";
$r149 = mysql_query($q149,$con);
$q150 = "create index sports_l on sports(link);";
$r150 = mysql_query($q150,$con);
$q151 = "create index sportse_h on sportse(headline);";
$r151 = mysql_query($q151,$con);
$q152 = "create index sportse_l on sportse(link);";
$r152 = mysql_query($q152,$con);
$q153 = "create index sportst_h on sportst(headline);";
$r153 = mysql_query($q153,$con);
$q154 = "create index sportst_l on sportst(link);";
$r154 = mysql_query($q154,$con);
$q155 = "create index sportsp_h on sportsp(headline);";
$r155 = mysql_query($q155,$con);
$q156 = "create index sportsp_l on sportsp(link);";
$r156 = mysql_query($q156,$con);
$q157 = "create index story_h on story(headline);";
$r157 = mysql_query($q157,$con);
$q158 = "create index story_l on story(link);";
$r158 = mysql_query($q158,$con);
$q159 = "create index storye_h on storye(headline);";
$r159 = mysql_query($q158,$con);
$q160 = "create index storye_l on storye(link);";
$r160 = mysql_query($q160,$con);
$q161 = "create index storyt_h on storyt(headline);";
$r161 = mysql_query($q161,$con);
$q162 = "create index storyt_l on storyt(link);";
$r162 = mysql_query($q162,$con);
$q163 = "create index storyp_h on storyp(headline);";
$r163 = mysql_query($q163,$con);
$q164 = "create index storyp_l on storyp(link);";
$r164 = mysql_query($q164,$con);
$q165 = "create index science_h on science(headline);";
$r165 = mysql_query($q165,$con);
$q166 = "create index science_l on science(link);";
$r166 = mysql_query($q166,$con);
$q167 = "create index sciencee_h on sciencee(headline);";
$r167 = mysql_query($q167,$con);
$q168 = "create index sciencee_l on sciencee(link);";
$r168 = mysql_query($q168,$con);
$q169 = "create index sciencet_h on sciencet(headline);";
$r169 = mysql_query($q169,$con);
$q170 = "create index sciencet_l on sciencet(link);";
$r170 = mysql_query($q170,$con);
$q171 = "create index sciencep_h on sciencep(headline);";
$r171 = mysql_query($q171,$con);
$q172 = "create index sciencep_l on sciencep(link);";
$r172 = mysql_query($q172,$con);
$q173 = "create index topnews_h on topnews(headline);";
$r173 = mysql_query($q173,$con);
$q174 = "create index topnews_l on topnews(link);";
$r174 = mysql_query($q174,$con);
$q175 = "create index topnewse_h on topnewse(headline);";
$r175 = mysql_query($q175,$con);
$q176 = "create index topnewse_l on topnewse(link);";
$r176 = mysql_query($q176,$con);
$q177 = "create index topnewst_h on topnewst(headline);";
$r177 = mysql_query($q177,$con);
$q178 = "create index topnewst_l on topnewst(link);";
$r178 = mysql_query($q178,$con);
$q179 = "create index topnewsp_h on topnewsp(headline);";
$r179 = mysql_query($q179,$con);
$q180 = "create index topnewsp_l on topnewsp(link);";
$r180 = mysql_query($q180,$con);
$q181 = "create index travel_h on travel(headline);";
$r181 = mysql_query($q181,$con);
$q182 = "create index travel_l on travel(link);";
$r182 = mysql_query($q182,$con);
$q183 = "create index travele_h on travele(headline);";
$r183 = mysql_query($q183,$con);
$q184 = "create index travele_l on travele(link);";
$r184 = mysql_query($q184,$con);
$q185 = "create index travelt_h on travelt(headline);";
$r185 = mysql_query($q185,$con);
$q186 = "create index travelt_l on travelt(link);";
$r186 = mysql_query($q186,$con);
$q187 = "create index travelp_h on travelp(headline);";
$r187 = mysql_query($q187,$con);
$q188 = "create index travelp_l on travelp(link);";
$r188 = mysql_query($q188,$con);
$q189 = "create index world_h on world(headline);";
$r189 = mysql_query($q189,$con);
$q190 = "create index world_l on world(link);";
$r190 = mysql_query($q190,$con);
$q191 = "create index worlde_h on worlde(headline);";
$r191 = mysql_query($q191,$con);
$q192 = "create index worlde_l on worlde(link);";
$r192 = mysql_query($q192,$con);
$q193 = "create index worldt_h on worldt(headline);";
$r193 = mysql_query($q193,$con);
$q194 = "create index worldt_l on worldt(link);";
$r194 = mysql_query($q194,$con);
$q195 = "create index worldp_h on worldp(headline);";
$r195 = mysql_query($q195,$con);
$q196 = "create index worldp_l on worldp(link);";
$r196 = mysql_query($q196,$con);
?>
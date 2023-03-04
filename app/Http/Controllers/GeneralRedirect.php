<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Url\Url;

class GeneralRedirect extends Controller
{

    public function general(){

        $list = GeneralRedirect::RedirectList();

        $url = Url::fromString(request()->fullUrl());

        if (Str($url->getBasename())->contains(['.jpg','.jpeg','.png'])){
            return RedirectController::fullredirect('https://bcsdemophotos.imgix.net/2018/BCS/BM_F%26T_Ad_2016_03.jpg?w=500');
        }


        $urlsection = $url->getPath();

        foreach ($list as $urlRedirect){
            if ($urlRedirect[0] == $urlsection ){
                return RedirectController::redirect($urlRedirect[1]);
            }
        }

        return RedirectController::redirect('/');
    }

    public static function redirect(){
       return (new GeneralRedirect())->general();
    }

    public static function RedirectList(){


        return  collect( [
          ['/ ',''],
          ['/30Years/Winners',''],
['/5-week-summer-cookery-course','/cookery-courses/5-week-summer-cookery-course'],
['/all-courses/11-good-reasons-attend','/certificate-cookery-course/reasons-to-enrol'],
['/archive/1984/farmshops-can-make-money','/blog-posts/archive-farm-shops-can-make-money'],
['/ballycotton-cliff-walk',''],
['/ballymaloe','/ballymaloe-cookery-school/ballymaloe'],
['/Ballymaloe','/ballymaloe-cookery-school/ballymaloe'],
['/ballymaloe-cookery-school','/ballymaloe-cookery-school/welcome-to-ballymaloe-cookery-school'],
['/ballymaloe-cookery-school/12-week-student-accommodation','/certificate-cookery-course/12-week-student-accommodation'],
['/ballymaloe-cookery-school/add-me-your-mailing-list',''],
['/ballymaloe-cookery-school/ballymaloe-cookery-school-covid-19-policy-statement','/'],
['/ballymaloe-cookery-school/ballymaloe-cookery-school-story','/certificate-cookery-course/ballymaloe-cookery-school-the-story'],
['/ballymaloe-cookery-school/ballymaloe-method-meringue',''],
['/ballymaloe-cookery-school/barn',''],
['/ballymaloe-cookery-school/breakfast-ballymaloe-cookery-school',''],
['/ballymaloe-cookery-school/coach-house',''],
['/ballymaloe-cookery-school/cookery-school-cottages',''],
['/ballymaloe-cookery-school/darinas-saturday-letter-valentines-day',''],
['/ballymaloe-cookery-school/east-cork-slow-food-convivium',''],
['/ballymaloe-cookery-school/events/litfest-2014',''],
['/ballymaloe-cookery-school/frank-peggys-cottage',''],
['/ballymaloe-cookery-school/frequently-asked-questions',''],
['/ballymaloe-cookery-school/green-energy-production',''],
['/ballymaloe-cookery-school/guest-chef-antony-worrall-thompson','{pattern}'],
['/ballymaloe-cookery-school/irish-design-awards-brochure-design',''],
['/ballymaloe-cookery-school/kinoith-brief-history',''],
['/ballymaloe-cookery-school/lecturers/darina-allen','/ballymaloe-cookery-school/darina-allen'],
['/ballymaloe-cookery-school/lecturers/rachel-allen','/ballymaloe-cookery-school/rachel-allen'],
['/ballymaloe-cookery-school/lecturers/rory-oconnell','/ballymaloe-cookery-school/rory-oconnell'],
['/ballymaloe-cookery-school/local-accommodation',''],
['/ballymaloe-cookery-school/local-attractions-activities',''],
['/ballymaloe-cookery-school/mrs-walshs-cottage',''],
['/ballymaloe-cookery-school/open-source-technologies',''],
['/ballymaloe-cookery-school/past-pupil-stories',''],
['/ballymaloe-cookery-school/pink-cottage',''],
['/ballymaloe-cookery-school/playroom',''],
['/ballymaloe-cookery-school/press-corner',''],
['/ballymaloe-cookery-school/press-links',''],
['/ballymaloe-cookery-school/self-catering-cottages-to-let',''],
['/ballymaloe-cookery-school/simply-delicious-pancakes',''],
['/ballymaloe-cookery-school/simply-delicious-pancakes?back=https://www.google.com/search?client=safari&as_qdr=all&as_occt=any&safe=active&as_q=Alan+pancake+recipe&channel=aplab&source=a-app1&hl=en',''],
['/ballymaloe-cookery-school/slow-food-east-cork-calendar-2011',''],
['/ballymaloe-cookery-school/social-media-connections',''],
['/ballymaloe-cookery-school/student-cottages',''],
['/ballymaloe-cookery-school/suppliers/arbutus-bread','{pattern}'],
['/ballymaloe-cookery-school/terms-and-conditions',''],
['/ballymaloe-cookery-school/things-do-while-ballymaloe-cookery-school',''],
['/ballymaloe-cookery-school/transfer-wise-payment-option',''],
['/ballymaloe-cookery-school/tv-series-rachels-coastal-cooking',''],
['/ballymaloe-cookery-school/video-introduction-ballymaloe-cookery-school',''],
['/ballymaloe-cookery-school/view-demonstration-photos',''],
['/ballymaloe-cookery-school/welcome-ballymaloe-cookery-school',''],
['/ballymaloe-cookery-school/white-house',''],
['/ballymaloe-cookery-school?page=1',''],
['/ballymaloe-cookery-school?page=3',''],
['/bird-survey-2017-ballymaloe-cookery-school',''],
['/blog',''],
['/blog/organic-farm/farm-walk?page=41',''],
['/blog/rachels-new-book-all-things-sweet-released-today?page=60',''],
['/blog-category/ballymaloe-news',''],
['/blog-category/courses',''],
['/blog-category/courses?page=1',''],
['/blog-category/events',''],
['/blog-category/farm-and-garden',''],
['/blog-category/news',''],
['/blog-category/slow-food',''],
['/business/ballymaloe-business',''],
['/business/family-business',''],
['/certificate-cookery-course',''],
['/certificate-cookery-course/12-week-certificate-programme',''],
['/certificate-cookery-course/12-week-certificate-student-blogs','/certificate-cookery-course/student-blogs'],
['/certificate-cookery-course/61-examples-things-youll-learn','/certificate-cookery-course/61-examples-of-things-youll-learn'],
['/certificate-cookery-course/about-12-week-certificate-course','/certificate-cookery-course/course-outline'],
['/certificate-cookery-course/after-hours-workshops',''],
['/certificate-cookery-course/business-food',''],
['/certificate-cookery-course/career-opportunities',''],
['/certificate-cookery-course/cooking-hacks-how-save-day',''],
['/certificate-cookery-course/how-make-perfect-stock',''],
['/certificate-cookery-course/identifying-salad-leaves-herbs',''],
['/certificate-cookery-course/preparing-order-work',''],
['/certificate-cookery-course/registration/certificate-course-requirments','/certificate-cookery-course/course-outline'],
['/certificate-cookery-course/visa-requirements-ireland',''],
['/certificate-cookery-course/weeks-lists',''],
['/certificate-cookery-course/weeks-list-sample-week-1',''],
['/certificate-cookery-course/weeks-list-sample-week-5',''],
['/certificate-cookery-course/wine-studies',''],
['/certificate-course/12-week-certificate-course-overview','/certificate-cookery-course/course-outline'],
['/certificate-course/frequently-asked-questions',''],
['/certificate-course/typical-day',''],
['/contact-us/how-find-us',''],
['/contact-us/please-call-me',''],
['/contact-us/student-photo-upload?BookingID=1026452',''],
['/contact-us/tell-us-about-your-business',''],
['/contact-us/website-feedback',''],
['/content/ballymaloe-grainstore',''],
['/content/ballymaloe-house',''],
['/content/ballymaloe-relish',''],
['/content/jobs-cooks',''],
['/content/magical-place',''],
['/content/mahon-point-farmers-market',''],
['/content/saturday-pizzas',''],
['/content/welcome-ballymaloe-cookery-school',''],
['/content/wildside-catering',''],
['/cookery-book-store',''],
['/cookery-courses','/all-courses?filter=Short+Course'],
['/cookery-courses/about-our-short-courses',''],
['/cookery-courses/accommodation-short-courses',''],
['/cookery-courses/afternoon-cookery-classes',''],
['/cookery-courses/campus-accommodation',''],
['/cookery-courses/course-details/100250/Dynamic-Vegetarian-Cooking/vpages/guestchefs',''],
['"/cookery-courses/course-details/100989/Homemade-Butter,-Yoghurt-and-Several-Cheeses?fbclid=IwAR0aYIFcI2RsS2vvtH616uO9Ra2nq301ECp9BADR28sD6G64PcGdj8y2clg"',''],
['/cookery-courses/course-details/100993/Barbeque-Course',''],
['/cookery-courses/course-details/101002/Get-Blogging-with-Lucy-Pearce',''],
['/cookery-courses/course-details/101019/Easy-Meals-with-Rachel-Allen',''],
['/Cookery-Courses/course-Details/101021',''],
['/cookery-courses/course-details/101021/An-Afternoon-of-Knife-Skills',''],
['/Cookery-Courses/course-Details/101033',''],
['/Cookery-Courses/course-Details/101049',''],
['/Cookery-Courses/course-Details/101050',''],
['/cookery-courses/course-details/101054/How-to-cure-a-Pig-in-a-Day-and',''],
['/cookery-courses/course-details/101139/Transition-Year-Cookery-Course',''],
['/cookery-courses/course-details/101143/Get-Blogging-with-Lucy-Pearse',''],
['/cookery-courses/course-details/101274/Afternoon-Demo-Tue-8th-Oct-2013',''],
['"/cookery-courses/course-details/101291/Spring-Foraging-with-Darina-Allen,"',''],
['/cookery-courses/course-details/101293/Pub-Food-for-a-New-Era',''],
['/cookery-courses/course-details/101307/Festive-Entertaining-with-Rachel-Allen-Part-2',''],
['/cookery-courses/course-details/101308/Christmas-Cooking',''],
['/cookery-courses/course-details/101308/christmas-cooking',''],
['"/cookery-courses/course-details/101313/Pizza,-Calzone,-Panzerotti,-Piadina....."',''],
['"/cookery-courses/course-details/101319/Home-Butchery,-Charcuterie-and-Sausage-Making-with-Philip-Dennhardt"',''],
['/cookery-courses/course-details/101321/Gluten-Free-Cooking-with-Rosemary-Kearney-Part-1',''],
['/Cookery-Courses/course-Details/101327',''],
['/cookery-courses/course-details/101329/Feel-Good-Food-Lets-Cook-with-Debbie-Shaw',''],
['/cookery-courses/course-details/101333/Gluten-Free-Cooking-',''],
['"/cookery-courses/course-details/101334/Homemade-Butter,-Yoghurt-and-Several-Cheeses"',''],
['/cookery-courses/course-details/101337/Everyday-Kitchen-with-Rachel-Allen-(New)',''],
['/Cookery-Courses/course-Details/101343/an-Afternoon-Of-Cake-Decorating',''],
['/Cookery-Courses/course-Details/101344/master-It-With-Rory-O\'connell',''],
['/cookery-courses/course-details/101347/Course',''],
['"/cookery-courses/course-details/101348/A-Week-at-Ballymaloe-Cookery-School,-Organic-Farm-&-Gardens"',''],
['/cookery-courses/course-details/101351/Intensive-Introductory-Course-Part-1',''],
['/cookery-courses/course-list',''],
['/cookery-courses/course-list/duration/0.5',''],
['/cookery-courses/course-list/search',''],
['/cookery-courses/course-list?duration=fiveday',''],
['/cookery-courses/local-alternative-accommodation',''],
['/cookery-courses/private-cookery-classes','/cookery-courses/private-bespoke-classes'],
['/cookery-courses/sustainable-food-course','/sustainable-food-course/sustainable-food-program-6-weeks'],
['/cookery-courses/sustainable-food-course/guest-speakers','/sustainable-food-course/sustainable-food-program-6-weeks'],
['/cookery-courses/sustainable-food-course/reasons-to-enroll','/sustainable-food-course/sustainable-food-program-6-weeks'],
['/cookery-courses/vine-video-making-mayonnaise',''],
['/cookery-courses/week-list/all/20130826','{pattern}'],
['/cookery-courses?page=1',''],
['/cookery-school/travelling-ballymaloe-cookery-school',''],
['/cookery-school-alumni/abra-berens','/cookery-school-alumni/abra-berens'],
['/cooking-school/guest-chefs/full-list','/ballymaloe-cookery-school/guest-chefs'],
['/events/WhatsOn',''],
['/full/ballymaloe-cookery-school-slide-show','/'],
['/gallery/alumni-stories-lucy-hyland','{pattern}'],
['/gardens',''],
['/gardens/celtic-maze',''],
['/gardens/fruit-garden',''],
['/gardens/gardens-farm-opening-hours',''],
['/gardens/gardens-potted-history',''],
['/gardens/garden-tours',''],
['/gardens/herbaceous-border-shell-house',''],
['/gardens/herbaceous-border-shell-house?fbclid=IwAR3AWqxCCrebMtOduOukNt_MObCdR4TlfarlegRif5k0drsBdW4F5mUfiU8',''],
['/gardens/herb-garden',''],
['/gardens/lydias-garden',''],
['/gardens/old-pleasure-garden',''],
['/gardens/our-gardens',''],
['/gardens/our-gardens?fbclid=IwAR0GLQ5F32SQSrzk9kYhLx8QmfOubYjjf2CcU3kdg2X0CC3IDj9MsJyRjBw',''],
['/gardens/our-gardens?fbclid=IwAR3ev48-ZJNjMcnIn3psGUcFPpCd7GXdVt7fWZGsRdfwA3O5VyWhHxM8Qzk',''],
['/gardens/potager',''],
['/gardens/soft-fruit-garden',''],
['/gardens/water-garden-memory-arboretum',''],
['/gardens?page=1',''],
['/how-make-irish-soda-bread',''],
['/how-make-irish-soda-bread?back=https://www.google.com/search?client=safari&as_qdr=all&as_occt=any&safe=active&as_q=Bally+Malew+Irish+soda+bread+recipe&channel=aplab&source=a-app1&hl=en',''],
['/how-make-irish-soda-bread?fbclid=IwAR0bCFrjPixzOGj-KnxjeZIDMscmU-f3j4G-q-OKJXI7u3wJ8UfhGAVGPoc',''],
['/how-work-chocolate',''],
['/index.php',''],
['/item/term/students?page=1',''],
['/items/2013/30-year-celebration-lunch',''],
['/items/2013/darinas-christmas-tips',''],
['/items/2013/jette-virdi-makes-christmas-treats',''],
['/items/2013/josef-finke-ballybrado-organic-farm-slow-food-east-cork',''],
['/items/2013/myrtle-allen-life-food',''],
['/items/2013/myrtle-allen-receive-civic-reception-cork-city-hall',''],
['/items/2013/our-new-demonstration-kitchen',''],
['/items/2013/rory-oconnell-receives-good-food-ireland-award',''],
['/items/2013/video-be-invitedde',''],
['/items/2014/afternoon-cake-decorating-pamela-black',''],
['/items/2014/autumn-recipe-variations-crab-apple-jelly',''],
['/items/2014/ballymaloe-garden-festival-2014-snapshot',''],
['/items/2014/ballymaloe-mad-2014',''],
['/items/2014/ballymaloe-poetry-prize-2014-0',''],
['/items/2014/blathnaid-bergin-restaurant-advisor',''],
['/items/2014/colm-mccans-wine-diary-ballymabrew',''],
['/items/2014/colm-mccans-wine-diary-organic-biodynamic-natural-wines',''],
['/items/2014/darina-rory-simply-delicious-christmas-rte-one',''],
['/items/2014/darinas-letter-lyer-restaurant-and-ramen-street-food',''],
['/items/2014/darina-travels-stateside',''],
['/items/2014/east-cork-slow-food-event',''],
['/items/2014/garden-diary-april-2014',''],
['/items/2014/garden-diary-february-2014',''],
['/items/2014/garden-diary-july-2014',''],
['/items/2014/garden-diary-june-2014',''],
['/items/2014/garden-diary-november-2014',''],
['/items/2014/guest-chef-john-desmond',''],
['/items/2014/irish-craft-beer-poster-child-irish-artisan-food-movement',''],
['/items/2014/job-opportunity',''],
['/items/2014/long-table-dinner-glasshouse',''],
['/items/2014/meet-our-suppliers-rosscarbery-recipes',''],
['/items/2014/national-potato-day-were-having-duchesse',''],
['/items/2014/no-doubting-thomasina',''],
['/items/2014/podcast-rory-oconnell-interview-kinsale-arts-festival',''],
['/items/2014/rachel-allen-all-things-sweet',''],
['/items/2014/rachel-allen-delhi-style',''],
['/items/2014/recommended-video-fermenting-vegetables-sandor-katz',''],
['/items/2014/ross-lewis-and-rachel-allen-litfest',''],
['/items/2014/simply-delicious-christmas-returns',''],
['/items/2014/slow-food-celebrate-st-brigid-irish-patron-saint-dairy',''],
['/items/2014/student-stories-baking-neighbours',''],
['/items/2014/team-ballymaloe-dublins-web-summit-2014',''],
['/items/2014/upcoming-slow-food-east-cork-event-you-are-what-your-mother-eats-cora-doherty',''],
['/items/2014/vine-6-second-omelette',''],
['/items/2014/vine-dingle-pie',''],
['/items/2014/wed-26th-nov-sushi-made-simple-shermin-mustafa',''],
['/items/2014/wine-event-john-wilson-wine-dinner-ballymaloe-house',''],
['/items/2014/wine-festive-season-colm-mccan-peter-corr',''],
['/items/2015/2015-tipping-point-climate-justice',''],
['/items/2015/ballymaloe-international-poetry-prize',''],
['/items/2015/ballymaloe-international-poetry-prize-2014',''],
['/items/2015/ballymaloe-vintage-antiques-fair',''],
['/items/2015/bcs-birds-eye-view',''],
['/items/2015/better-living-through-biology-respecting-soil',''],
['/items/2015/colm-mccans-wine-diary-château-beauregard-mirouze-visits-bcs',''],
['/items/2015/colm-mccans-wine-diary-cork-rueda',''],
['/items/2015/colm-mccans-wine-diary-kerrygold-ballymaloe-literary-festival-food-wine',''],
['/items/2015/colm-mccans-wine-diary-taylors-port-masterclass',''],
['/items/2015/craft-beer-talk-tasting',''],
['/items/2015/darinas-blog-camilla-plum-coming',''],
['/items/2015/darinas-blog-long-table-dinner-glasshouse',''],
['/items/2015/darinas-saturday-letter-1',''],
['/items/2015/darinas-saturday-letter-dream-confection-midsummer-night',''],
['/items/2015/darinas-saturday-letter-happy-easter',''],
['/items/2015/east-cork-slow-food-event-stop-food-waste',''],
['/items/2015/eat-yourself-well-2015-anti-inflammatory-nutrition-plan-debbie-shaw',''],
['/items/2015/featured-student-blog-whats-my-purse',''],
['/items/2015/food-waste-how-we-all-must-play-our-part',''],
['/items/2015/garden-diary-april-2015',''],
['/items/2015/garden-diary-january-2015',''],
['/items/2015/garden-diary-june-2015',''],
['/items/2015/garden-diary-november-2015',''],
['/items/2015/garden-diary-september-2015',''],
['/items/2015/guest-blogger-life-after-ballymaloe-kate-moriarty',''],
['/items/2015/guest-blog-post-charlotte-pike-art-fermentation',''],
['/items/2015/honey-co-photos',''],
['/items/2015/litfest-15-ballymaloe-cookery-school',''],
['/items/2015/midleton-farmers-market-15-years-celebrations',''],
['/items/2015/orienteering-ballymaloe-cookery-school-bishopstown-orienteering-club',''],
['/items/2015/orienteering-ballymaloe-house-bishopstown-orienteering-club',''],
['/items/2015/recipes-abergavenny-food-festival-demonstration',''],
['/items/2015/recipe-smoked-wild-irish-salmon-arjard-and-pickled-red-onions',''],
['/items/2015/recipe-traditional-spotted-dog',''],
['/items/2015/rory-oconnells-tv-series-how-cook-well',''],
['/items/2015/simply-delicious-christmas-rte1',''],
['/items/2015/student-blogs-jeni-pim-grannys-bread',''],
['/items/2015/ttip-tipping-scales-against-you',''],
['/items/2015/tv-series-rachels-coastal-cooking',''],
['/items/2015/tv-show-il-faut-pas-rever',''],
['/items/2015/valentines-day-recipe-pamelas-decadent-chocolate-mousse',''],
['/items/2015/weston-price-foundation-visits-limerick',''],
['/items/2016/building-new-relationship-our-food',''],
['/items/2016/colin-sage-cork-food-policy',''],
['/items/2016/colm-mccans-wine-diary-organic-biodynamic-natural-wines-pascal-rossignol',''],
['/items/2016/colm-mccans-wine-diary-rhone-valley-simon-tyrrell',''],
['/items/2016/colms-wine-diary-california-wines-less-more',''],
['/items/2016/competition-small-plate-ideas',''],
['/items/2016/countdown-litfest-16',''],
['/items/2016/english-market-cork',''],
['/items/2016/food-travel-readers-awards-2016-shortlist',''],
['/items/2016/garden-diary-october-2016',''],
['/items/2016/growing-chillies-life-less-ordinary',''],
['/items/2016/mothers-day-perfect-gift-ideas',''],
['/items/2016/polish-your-photography-skills-summer',''],
['/items/2016/recipe-myrtle-allens-carrageen-moss-pudding',''],
['/items/2016/recipe-rhubarb-fool',''],
['/items/2016/recipe-st-patricks-day-cupcakes',''],
['/items/2016/secret-long-healthy-life',''],
['/items/2016/slow-food-east-cork-eat-yourself-well-karen-brosnan',''],
['/items/2016/slow-food-pop-dinner-2016',''],
['/items/2016/spring-newsletter',''],
['/items/2016/stay-ballymaloe-cookery-school-over-easter',''],
['/items/2016/story-farmers-market-stall',''],
['/items/2016/tutored-chocolate-tasting-nancy-gilchrist-–-slow-food-east-cork-event',''],
['/items/2016/what-difference-week-makes',''],
['/items/2016/womens-little-christmas',''],
['/items/2017/12-week-students-baking-bread-jointing-chicken…',''],
['/items/2017/business-food-blathnaid-bergin',''],
['/items/2017/cooking-ballymaloe-article-telegraph',''],
['/items/2017/darina-allen-tour-sydney-australia',''],
['/items/2017/darinas-saturday-letter-favourite-london-eating-places',''],
['/items/2017/food-revolution-ireland-cbs-news',''],
['/items/2017/hens-are-free',''],
['/items/2017/how-segment-orangecitrus-fruit',''],
['/items/2017/how-we-make-or-sourdough',''],
['/items/2017/litfest-17-tickets-are-now-sale',''],
['/items/2017/mary-dowey-visit-ballymaloe-cookery-school',''],
['/items/2017/portrait-myrtle-allen',''],
['/items/2017/rory-oconnell-cook-well-eat-well-wins-irish-cookbook-year-award',''],
['/items/2017/simply-delicious-christmas-–-recipes',''],
['/items/2017/spring-foraging-darina-allen-one-day-course-fri-28th-april',''],
['/items/2017/spuds-are-tim-allen-planting-potatoes',''],
['/items/2017/upcoming-course-fast-and-fabulous-easy-meals-rachel-allen',''],
['/items/2017/urban-garden',''],
['/items/2018/brexit-and-ballymaloe-cookery-school',''],
['/items/2018/cottages-available-easter',''],
['/items/2018/darina-allen-speaks-ben-shewry-australia',''],
['/items/2018/fermenting-shed','/ballymaloe-cookery-school/fermentation-shed'],
['/items/2018/guest-chef-dearbhla-reynolds',''],
['/items/2018/neighbourfood-starts-cork',''],
['/items/2018/news-roundup-found-breakfast-foods',''],
['/items/2018/rory-oconnells-new-series',''],
['/items/2018/simply-delicous-classic-collection-released',''],
['/items/2018/skibbereen-farmers-market',''],
['/items/2018/slowfood-grandmothers-day-ballymaloe-cookery-school',''],
['/items/2019/alumni-news-thomasina-miers',''],
['/items/2019/flowers-iona-seasonal-floral-decoration-courses-ballymaloe-house',''],
['/items/2019/lemonade-vs-water-kefir','/ballymaloe-cookery-school/fermentation-shed'],
['/items/2019/restaurant-advisor',''],
['/items/2020/garden-café-airstream-truck-ballymaloe-cookery-school',''],
['/items/2020/garden-café-airstream-truck-ballymaloe-cookery-school?fbclid=IwAR1SmZuqFHrxvnGKmIyuJ6bguNRYlV0onaDgI7PSFtP9r6o5gMAKQRS9g3I',''],
['/items/2020/natasha-harty-rip',''],
['/items/2021/darina-allens-campaign-practical-cooking-classes-every-child-school-curriculum',''],
['/items/2021/full-stack-php-laravel-developer-required',''],
['/items/2021/garden-diary-march-2021',''],
['/items/ballymaloe-international-poetry-prize-2013',''],
['/items/term/ballymaloe-news',''],
['/items/term/events-at-ballymaloe-cookery-school',''],
['/items/term/events-at-ballymaloe-cookery-school?page=5',''],
['/items/term/news',''],
['/items/term/news?page=8',''],
['/organic-farm','/organic-farm/our-organic-farm'],
['/organic-farm/breeding-birds-ballymaloe-cookery-school',''],
['/organic-farm/compost-cycle-ballymaloe-cookery-school','/organic-farm/our-compost-cycle'],
['/organic-farm/cows','/organic-farm/cows'],
['/organic-farm/dairy','organic-farm/the-dairy'],
['/organic-farm/farm-walk','/organic-farm/the-farm-walk'],
['/organic-farm/garden-shop','/gardens/the-garden-shop'],
['/organic-farm/glasshouses-overview','/organic-farm/glasshouses-overview'],
['/organic-farm/going-organic',''],
['/organic-farm/hens','/organic-farm/hens'],
['/organic-farm/heritage-tomatoes','/organic-farm/glasshouses-overview'],
['/organic-farm/history-farm-timeline','/organic-farm/history-of-the-farm'],
['/organic-farm/our-animals','/organic-farm/our-animals',''],
['/organic-farm/animals-our-organic-farm','/organic-farm/our-animals',''],
['/organic-farm/our-organic-farm','/organic-farm/our-organic-farm'],
['/organic-farm/outdoor-vegetable-patch','/organic-farm/outdoor-vegetable-patch'],
['/organic-farm/pigs','/organic-farm/pigs'],
['/organic-farm/sustainability','/organic-farm/sustainability'],
['/organic-farm/waste-reduction','/organic-farm/waste-reduction'],
['/pages/12-week-cookery-course-student-blog','',''],
['/pages/accommodation-available',''],
['/pages/accommodation-not-available',''],
['/pages/ballymaloe-cookery-school-gift-voucher',''],
['/pages/ballymaloe-shop',''],
['/pages/noelle-morrison',''],
['/pages/paddy-o-granola',''],
['/pages/restaurant-manager',''],
['/photos/farm-gallery',''],
['/photos-instagram',''],
['/portfolio',''],
['/portfolio/networking',''],
['/portfolio/term/photographies',''],
['/portfolio?page=1',''],
['/privacy-policy',''],
['/recipes.php',''],
['/recipes.php?q=Quick','{pattern}'],
['/recipes/585/ballymaloe-method-how-make-perfect-mayonnaise','{pattern}'],
['/refund-policy',''],
['/school/library',''],
['/school/library/results',''],
['/school/recipes',''],
['/school/recipes/browse',''],
['/school/recipes/browse/Lists/Courses/2015/12+Week+April/Week+5/Friday/index.php',''],
['/school/recipes/browse/Lists/Courses/2019/12+Week+September+2019/Week+5/Thursday/index.php',''],
['/school/recipes/browseview',''],
['/school/recipes/results/Beginners',''],
['/school/recipes/results/Beurre blanc',''],
['/school/recipes/results/biscotti',''],
['/school/recipes/results/biscuits',''],
['/school/recipes/results/Blood orange',''],
['/school/recipes/results/boxty',''],
['/school/recipes/results/bread',''],
['/school/recipes/results/brioche',''],
['/school/recipes/results/Brioche',''],
['/school/recipes/results/brown bread',''],
['/school/recipes/results/Brown bread',''],
['/shop',''],
['/slow-food-east-cork-past-events',''],
['/stafftype/lecturer',''],
['/sustainable-food-course',''],
['/sustainable-food-course/index.php',''],
['/tags/12-week-certificate',''],
['/tags/accommodation',''],
['/tags/alumni',''],
['/tags/alumni?page=1',''],
['/tags/article',''],
['/tags/award',''],
['/tags/baker-cafe-tart-london',''],
['/tags/bakery',''],
['/tags/ballymaloe-litfest',''],
['/tags/ballymaloe-method-0',''],
['/tags/ballymaloe-poetry-prize',''],
['/tags/bcs-blog',''],
['/tags/bcs-blog?page=1',''],
['/tags/bcs-blog?page=2',''],
['/tags/bcs-blog?page=3',''],
['/tags/bcs-blog?page=4',''],
['/tags/big-shed',''],
['/tags/book',''],
['/tags/café',''],
['/tags/catering',''],
['/tags/celtic-maze',''],
['/tags/chef-positions',''],
['/tags/yoghurt',''],
['/taxonomy/term/128/all',''],
['/taxonomy/term/24/0?page=4',''],
['/taxonomy/term/24/0?page=5',''],
['/testimonial',''],
['/testimonial?page=1',''],
['/testimonial-categories/testimonials-12-week-courses',''],
['/testimonial-categories/testimonial-short-courses',''],
['/user','/user'],
['/user/password','/user'],
['/video/ballymaloe-cookery-school',''],
['/video/ballymaloe-cookery-school/vine',''],
['/video/ballymaloe-method/mayonnaise',''],
['/vouchers',''],
['/vouchers/gift-package-learn-relax','{pattern}'],
['/what-our-students-say/amazing-experience','{pattern}'],
        ]);
    }
}

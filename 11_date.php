<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    //Y:当前年份 m:当前月份(01-12) d:当前日期(01-31) l:当前星期几(英文)
        echo "今天是：".date("Y/m/d")."<br>";
        echo "今天是：".date("Y.m.d")."<br>";
        echo "今天是：".date("Y-m-d")."<br>";
        echo "今天是：".date("l")."<br>";

    //设置时区：
        date_default_timezone_set("Asia/Shanghai");
    //h:带有首位零的12小时格式 i:带有首位零的分钟 s:带有首位零的秒(00-59) a:小写的午前和午后(am或pm)
        echo "当前时间为--".date("h:i:sa")."<br>";

    //用字符串创建日期：
        $day=strtotime('tomorrow');//即刻起的一天后
        echo date("Y-m-d h:i:sa",$day)."<br>";
        $day1=strtotime('+2 Months');//即刻起的2个月后
        echo date("Y-m-d h:i:sa",$day1)."<br>";
        $day2=strtotime('next Friday');//即刻起的下个星期五
        echo date("Y-m-d h:i:sa",$day2)."<br>";


    //例1：计算出未来6周内所有周日的日期：
        $start=strtotime('Sunday');//获取下一个周日的日期
        $end=strtotime('+6 Weeks',$start);//计算出最后一个周日的日期
        while($start < $end){ //根据计算得出循环范围
            echo date("m-d",$start)."<br>";
            $start=strtotime('+1 Week',$start);//日期加一周开始下一次循环
        }



    //例2：计算当前日期距离未来某一时间的时间：
        $aim=strtotime('December 11');
        $days=ceil(($aim-time())/60/60/24);//将秒数转化为天数
        echo "距离12月11日还有：".$days."天<br>";
    ?>
</body>
</html>
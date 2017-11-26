<?php
include("registration/dbcon.php");
$m_c=1;
$query=mysql_query("select * from sitec")or die(mysql_error());
while($row=mysql_fetch_array($query))
$m_c++;
mysql_query("update sitec set ru='$m_c'")or die(mysql_error());
$query=mysql_query("select * from sitec")or die(mysql_error());
$row=mysql_fetch_array($query);
$m_regc=$row['ru'];
$m_webc=$row['wv'] + rand(0,3);
$m_webv=$row['wh'] + rand(1,5);
$m_ls=$row['lf'] + rand(0,2);

mysql_query("update sitec set ru='$m_regc',wv='$m_webc',wh='$m_webv',lf='$m_ls' where ru='$m_regc'")or die(mysql_error());
?>

<div class="counter-fixed-bg counter-bg-1">

            <!-- Counter Section -->
            <section id="counter" class="counter-section content-section">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <h2 class="white wow bounceInDown">Site Counters</h2>
                            <h3 class="white caption bounceInUp">Wesite Visitors,Users Counter</h3>
                        </div><!-- /.col-md-12 -->

                        <div class="col-sm-3 counter-wrap wow fadeInUp" data-wow-offset="10">
                            <strong><span class="timer"><?echo $m_regc; ?></span>+</strong>
                            <span class="count-description">Registered Users</span>
                        </div><!-- /.col-sm-3 -->

                        <div class="col-sm-3 counter-wrap wow fadeInUp" data-wow-offset="10">
                            <strong><span class="timer"><?echo $m_webc; ?></span>+</strong>
                            <span class="count-description">Website Visitors</span>
                        </div><!-- /.col-sm-3 -->

                        <div class="col-sm-3 counter-wrap wow fadeInUp" data-wow-offset="10">
                            <strong><span class="timer"><?echo $m_webv; ?></span>+</strong>
                            <span class="count-description">Website Hits</span>
                        </div><!-- /.col-sm-3 -->

                        <div class="col-sm-3 counter-wrap wow fadeInUp" data-wow-offset="10">
`                            <strong><span class="timer"><?echo $m_ls; ?></span>+</strong>
							 <span class="count-description">Likes + Shares</span>
                        </div><!-- /.col-sm-3 -->
						
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section><!-- /.counter-section -->
</div>
    </div>
        <footer>
            <? if($ses){?>
                <a class="editing" href="../Admin/adminSite/footer/mailFooterEditing.php">Редактировать Блок</a>
            <?}?>
            <div class="footerMid">
                <div class="footerContent footerContentPhone">
                    <div class="footerIcon footerIconPhone wow fadeInLeft" data-wow-delay="0.3s" data-wow-offset="10">
                        <div class="footerIconShadow">
                            <a href="#">
                                <img src="../Image/FooterIcon/<? echo $footerDatas[0]['iconLink'];?>" alt="<? echo $footerDatas[0]['iconAlt'];?>">
                            </a>
                        </div>
                    </div>
                    <div class="footerInfoName">
                        <a href="<? echo $footerDatas[0]['infoDescription'] ;?>"><? echo $footerDatas[0]['description'];?></a>
                    </div>
                    <div class="footerInfo">
                        <a href="<? echo $footerDatas[0]['infoDescription'] ;?>"><? echo $footerDatas[0]['infoLink'] ;?></a>
                    </div>
                </div>
                <div class="footerContent footerContentEmail">
                    <div class="footerIcon footerIconEmail wow fadeInLeft"  data-wow-delay="0.7s" data-wow-offset="10">
                        <div class="footerIconShadow">
                            <a href="#">
                                <img src="../Image/FooterIcon/<? echo $footerDatas[1]['iconLink'];?>" alt="<? echo $footerDatas[1]['iconAlt'];?>">
                            </a>
                        </div>
                    </div>
                    <div class="footerInfoName">
                        <a href="<? echo $footerDatas[1]['infoDescription'] ;?>"><? echo $footerDatas[1]['description'];?></a>
                    </div>
                    <div class="footerInfo">

                        <a href="<? echo $footerDatas[1]['infoDescription'] ;?>"><? echo $footerDatas[1]['infoLink'] ;?></a>

                    </div>
                </div>
                <div class="footerContent footerContentVk">
                    <div class="footerIcon footerIconVk  wow fadeInLeft"  data-wow-delay="1.1s" data-wow-offset="10">
                        <div class="footerIconShadow">

                            <a href="#">
                                <img src="../Image/FooterIcon/<? echo $footerDatas[2]['iconLink'];?>" alt="<? echo $footerDatas[2]['iconAlt'];?>">
                            </a>
                        </div>
                    </div>
                    <div class="footerInfoName">
                        <a href="<? echo $footerDatas[2]['infoDescription'] ;?>"><? echo $footerDatas[2]['description'];?></a>
                    </div>
                    <div class="footerInfo">
                        <a href="<? echo $footerDatas[2]['infoDescription'] ;?>"><? echo $footerDatas[2]['infoLink'] ;?></a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
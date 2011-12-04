<div>
    <style>
        .overview ul
        {
            margin: 0;
            padding: 0;
        }

        .overview ul li
        {
            list-style: none;
            display: inline-block;
            color: rgb(215, 215, 62);
        }

        .overview ul li span#a
        {
            margin-right: 315px;
            font-size: 20px;
        }

        .overview ul li span#b
        {
            margin-left: -390px;
            font-size: 20px;
        }

        .background_1
        {
            background-color: #33cc00;
            width: 200px;
            border-radius: 20px;
            padding: 10px;
            height: 200px;

        }
        .background_1 form
        {
            margin-top: 20px;
        }
        .background_1 form input
        {
            border: 1px solid black;
            background-color: #18e600;
            height: 35px;
            margin-bottom: 5px;
            color: white;
            padding: 0;
        }
        .background_1 .tombol
        {
            position: static;
            background-color: rgb(0,102,51);
            margin-top: 215px;
            border-radius: 5px;
            color: rgb(215, 215, 62);
            font-weight: bold;
            border: 1px solid rgb(0,102,51);
            margin-left: 180px;
            margin-top: 180px;
            height: 30px;
            width: 50px;
            cursor: pointer;
        }
        /*        .background_1 p.value_hidden
                {
                    color: red
                }*/
        .background_2
        {
            height: 30px;
            width: 140px;
            border: 15px solid rgb(0,102,51);
            border-radius: 3px;
            background-color: white;
            margin-top: 180px;
            margin-left: 20px;
        }
        .background_3
        {
            height: 300px;
            background-color: #18e600;
            border-radius: 20px;

        }
        .background_3 p
        {
            margin: 0;
            padding: 5px 0px 0px 0px;
            text-align: center
        }
        .background_4
        {

            height: 300px;
            width: 200px;
            position: absolute;
            padding: 20px 10px 10px 10px;
            margin-top: -468px;
            margin-left: 260px;
            border-radius: 20px;
            background-color: #33cc00;
        }
        .background_4 form
        {
            margin-top: 15px;
            width: 300px;
            position: absolute;
            margin-left: -40px;
        }

        .background_4 form label
        {
            color: white;
            font-weight: bold
        }
        .background_4 form input
        {
            border-radius: 10px;
            width: 150px;
            margin: 0px 0px 0px 5px;
            border: 1px solid rgb(0,153,0);
            padding: 5px
        }
        .background_4 .tombol
        {
            position: relative;
            background-color: rgb(0,102,51);         
            border-radius: 5px;
            color: rgb(215, 215, 62);
            font-weight: bold;
            border: 1px solid rgb(0,102,51);         
            height: 30px;
            width: 50px;
            margin-left: 145px;
            margin-top: 20px;
            cursor: pointer;
        }
        .pengunjung
        {
            color: red;
        }

        .cek
        {
            font-size: 12px;
            margin: 0;
            padding: 0;
            position: absolute;
            margin-left: 0px;
            margin-top: 5px;
        }

        .captca
        {
            border: 1px solid black;
            position: absolute;
            height: 100px;
            width: 200px;
            margin-left: 10px;
            margin-top: 10px;

        }
        .captca_form
        {

            position: absolute;
            height: 100px;
            width: 200px;
            margin-left: 10px;
            margin-top: 115px;
        }

    </style>

    <ul>
        <li><span id="a">Update Anggota</span></li>
        <li><span id="b">Forum</span></li>
    </ul>

    <hr style="width: 455px">

    <p>Khusus Untuk Anggota Insan Harmoni</p>

    <div class="background_1">

        <form>
            <input type="text" name="" value="Nama" onclick="hideValue()" id="nama"/> 
            <input type="text" name="" value="Angkatan"/> 
            <input type="text" name="" value="Alamat"/> 
            <input type="text" name="" value="Email/Telp"/> 

            <input type="submit" value="kirim" class="tombol"  />
        </form>


    </div>
<!--    <script>
        function hideValue(){
            var x= document.getElementById("nama").value;
            alert(x)
        }
        
    </script>
-->

    <div class="captca">

    </div>
    <form class="captca_form">
        <input type="text"/>
    </form>
    <div class="background_2">

    </div>
    <p style="font-weight: bold;position: absolute; text-align: center; margin: 0px 0px 0px -135px;">pengunjung</p>


    <div class="background_4">
        <div class="background_3">

            <style type="text/css">
                /* root element for scrollable */
                #scrollable {

                    /* required settings */
                    position:relative;
                    overflow:hidden;

                    /* vertical scrollables have typically larger height than width but not now */
                    height: 275px;	 
                    width: 180px;
                }

                /* root element for scrollable items */
                .scrollable .items {
                    position:absolute;

                    /* this time we have very large space for the height */
                    height:20000em;
                }
                /* root element for scrollable */
                #vertical {  

                    /* required settings */
                    position:relative;


                    /* vertical scrollers have typically larger height than width */	
                    height: 275px;	 
                    width: 180px;
                    margin-left: 5px;

                }

                /* root element for scrollable items */
                #items {	
                    position:absolute;
                    height: 165px;	
                    /* this time we have very large space for height */	
                    height:20000em;	
                    margin: 20px 0px 0px 10px;
                }

                /* single scrollable item */
                #item {


                    font-size:14px;
                    height:auto;
                    width: 200px;
                }

                /*                 elements inside single item 
                                .item img {
                                    float:left;
                                    margin-right:20px;
                                    height:180px;
                                    width:240px;
                                }
                
                                .item h3 {
                                    margin:0 0 5px 0;
                                    font-size:16px;
                                    color:#456;
                                    font-weight:normal;
                                }*/


                /* the action buttons above the scrollable */
                /*                #actions {
                                    width:700px;
                                    margin:30px 0 10px 0;	
                                }
                
                                #actions a {
                                    font-size:11px;		
                                    cursor:pointer;
                                    color:#666;
                                }
                
                                #actions a:hover {
                                    text-decoration:underline;
                                    color:#000;
                                }
                
                                .disabled {
                                    visibility:hidden;		
                                }
                
                                .next {
                                    float:right;
                                }	*/

            </style>


            <div class="scrollable" id="vertical">


                <div id="items" style="height: 5px">

                    <div style="width: 200px;">


                        <div id="item">
                            <div>
                                <p style="width: 200px; margin: 0;padding: 0;height: auto; ">hai</p>
                            </div>
                        </div>


                    </div>

                    <div style="width: 200px;">


                        <div id="item">

                            <p style="width: 200px; margin: 0;padding: 0;height: auto ">apa kabar</p>

                        </div>


                    </div>

                    <div style="width: 200px;">


                        <div id="item">

                            <p style="width: 200px; margin: 0;padding: 0;height: auto ">apa kabar</p>

                        </div>


                    </div>
                    <div style="width: 200px;">


                        <div id="item">

                            <p style="width: 200px; margin: 0;padding: 0;height: auto ">apa kabar</p>

                        </div>


                    </div>
                    <div style="width: 200px;">


                        <div id="item">

                            <p style="width: 200px; margin: 0;padding: 0;height: auto ">apa kabar</p>

                        </div>


                    </div>
                    <div style="width: 200px;">


                        <div id="item">

                            <p style="width: 200px; margin: 0;padding: 0;height: auto ">apa kabar</p>

                        </div>


                    </div>
                    <div style="width: 200px;">


                        <div id="item">

                            <p style="width: 200px; margin: 0;padding: 0;height: auto ">apa kabar</p>

                        </div>


                    </div>
                    <div style="width: 200px;">


                        <div id="item">

                            <p style="width: 200px; margin: 0;padding: 0;height: auto ">apa kabar</p>

                        </div>


                    </div>
                    <div style="width: 200px;">


                        <div id="item">

                            <p style="width: 200px; margin: 0;padding: 0;height: auto ">apa kabar</p>

                        </div>


                    </div>
                    <div style="width: 200px;">


                        <div id="item">

                            <p style="width: 200px; margin: 0;padding: 0;height: auto ">apa kabar</p>

                        </div>


                    </div>
                    <div style="width: 200px;">


                        <div id="item">

                            <p style="width: 200px; margin: 0;padding: 0;height: auto ">apa kabar</p>

                        </div>


                    </div>
                    <div style="width: 200px;">


                        <div id="item">

                            <p style="width: 200px; margin: 0;padding: 0;height: auto ">apa kabar</p>

                        </div>


                    </div>
                    <div style="width: 200px;">


                        <div id="item">

                            <p style="width: 200px; margin: 0;padding: 0;height: auto ">apa kabar</p>

                        </div>


                    </div>
                    <div style="width: 200px;">


                        <div id="item">

                            <p style="width: 200px; margin: 0;padding: 0;height: auto ">apa kabar</p>

                        </div>


                    </div>
                    <div style="width: 200px;">


                        <div id="item">

                            <p style="width: 200px; margin: 0;padding: 0;height: auto ">apa kabar</p>

                        </div>


                    </div>
                    <div style="width: 200px;">


                        <div id="item">

                            <p style="width: 200px; margin: 0;padding: 0;height: auto ">apa kabar</p>

                        </div>


                    </div>

                    <div style="width: 200px;">


                        <div id="item">

                            <p style="width: 200px; margin: 0;padding: 0;height: auto ">lagi dmn</p>

                        </div>


                    </div>


                </div>

            </div>

            <script>
                // execute your scripts when DOM is ready. this is a good habit
                $(function() {		
		
                    // initialize scrollable with mousewheel support
                    $(".scrollable").scrollable({ vertical: true, mousewheel: true });	
	
                });
            </script>

        </div>
        <style>
            #img_smiley {
                position: absolute;
                margin-left: -22px;
                margin-top: 5px;
                cursor:pointer;
            }
            #img_smiley2 {
                position: absolute;
                margin-left: -22px;
                margin-top: 5px;
                cursor:pointer;
                display: none
            }

            .tooltip {
                display:none;
                position: absolute;
                margin-top: -355px;
                margin-left: 195px;
            }


            .tooltip table
            {
                margin: 0;
                padding: 0;

            }

            /*            .tooltip table tbody
                        {
                            margin: 0;
                            padding: 0;
                        }
                        
                        .tooltip table tbody tr
                        {
                            margin: 0;
                            padding: 0;
                        }
                        
                        .tooltip table tbody tr td
                        {
                            margin: 0;
                            padding: 0;
                        }
            */
            .tooltip table tbody tr td
            {
                opacity:0.5;
            }

            .tooltip table tbody tr td a img
            {
                height: 19px;
                width: 19px;

            }
            
            .areatext
            {
                margin: 0;
                padding: 0;
                max-width: 150px;
                max-height: 100px;
                border-radius: 10px;
                position: static;
            }

        </style>
        
        <form>
            <label>nama</label>
            <input type="text"/>
            <br/>
            <label>pesan</label>
            
            <textarea class="areatext">
                
            </textarea><img src="../smileys/wink.gif" id="img_smiley" /><img src="../smileys/wink.gif" id="img_smiley2" />
            <div class="tooltip"><?php echo $smiley_table; ?></div>


            <script>
                $(document).ready(function(){
                    $("#img_smiley").click(function(){
                        $(".tooltip").fadeIn();
                        $("#img_smiley2").css({
                            "display":"block",
                            "position":"absolute",
                            "margin-left":"230px",
                            "margin-top":"-24px"
                        
                        });
                        $("#img_smiley").css({
                            "display":"none"
                        });
                    });
                    
                   
                    
                    $("#img_smiley2").click(function(){
                        $(".tooltip").fadeOut();
                        $("#img_smiley").css({
                            "display":"block",
                            "position":"absolute",
                            "margin-left":"230px",
                            "margin-top":"-24px"
                        });
                        $("#img_smiley2").css({
                            "display":"none"
                        });
                    });
                });
               
            </script>
            <script>
                $(document).ready(function(){
                    $(".tooltip table tbody tr td a img").click(function(){
                        $(".tooltip").fadeOut();
                    });
                });
            </script>
            <script>
                $(document).ready(function(){
                    $(".tooltip table tbody tr td").mouseover(function(){
                        $(this).css({
                            
                            "cursor":"pointer",
                            "opacity":"1"
                        });
                    });
                    $(".tooltip table tbody tr td").mouseout(function(){
                        $(this).css({
                            
                            "opacity":"0.5"
                        });
                    });
                });
            </script>


            <br/>
            <input type="submit" value="kirim" class="tombol"/>
        </form>
    </div>



</div>
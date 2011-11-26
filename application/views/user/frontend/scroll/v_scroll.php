<style type="text/css">
    .scrollable {
        position:relative;
        overflow:hidden;
        height: 800px;
        width: 800px;
        background-color: white;
    }

    .scrollable .items {
        position:absolute;
        height:20000em;
    }
    .vertical {  
        position:relative;
        overflow:hidden;	
        height: 700px;	 
        width: 900px;
        margin-top: -5px;
        border-radius: 20px;
        background-color: rgb(0,153,0);
        
    }

    .items {	
        position:absolute;
        height:20000em;	
        margin: 0px;
        width: 960px;
    }


    .item {
        
        border-right: 5px dotted rgb(0,102,51);
        margin:10px 0;
        padding:15px;
        font-size:12px;
        height:550px;
        width: 950px;
        overflow: hidden;
        text-align: left;
    }


    .item img {
        float:left;
        margin-right:20px;
        height:180px;
        width:240px;
    }

    .item h3 {
        margin:0 0 0px 20;
        font-size:30px;
        color:#456;
        font-weight:normal;
        position: absolute;
    }

    .item p
    {
        text-align: justify;
        font-size: 23px;
        color: white;
    }


    #actions {
        width:700px;
        margin:30px 0 10px 0;	
    }

    #actions a {
        font-size:23px;		
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
    }	

    .prev
    {
        margin-left: 100px;
        float: left;
    }

    div.judul h2
    {
        float: left;
        color: rgb(215,215,62);
        margin: 5px 0px 0px 20px;
        font-size: 30px;
        text-shadow: 2px 4px 5px black;

    }


</style>
<div class="judul">
    <h2>Sketsa</h2>
</div>

<div id="actions">
    <a class="prev">&laquo; kembali</a>
    <a class="next">selanjutnya &raquo;</a>
</div>
<div class="scrollable vertical">


    <div class="items">
        <!--list-->
        <div>

            <div class="item">
                <?php $this->load->view('user/frontend/scroll/v_scroll2'); ?>
            </div>

        </div>

        <!--list-->
        <div>

            <div class="item">
                <?php $this->load->view('user/frontend/scroll/v_scroll2'); ?>
            </div>

        </div>

        
    </div>

    <script>

        $(function() {			
            $(".scrollable").scrollable({ vertical: true, mousewheel: true });		
        });
    </script>






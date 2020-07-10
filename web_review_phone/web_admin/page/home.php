
    <div class="home">
        <h5>Chào mừng trở lại, <b><?php echo $name ?></b></h5>
        <p>Quyền truy cập hiện tại của bạn là: <b><?php echo($_SESSION["TEN_PHAN_QUYEN"]) ?></b></p>
    </div>
    <?php
    if(isset($_SESSION["TEN_PHAN_QUYEN"])&&$_SESSION["TEN_PHAN_QUYEN"]=="Admin")
    {
        if($count_report>0)
        {
            echo'<div class="home">
            <h5>Hiện tại có <b>'.$count_report.'</b> comment bị báo cáo và cần được giải quyết.</h5>
            </div>';
        }
    }
    ?>
    <div class="home">
        <h5>Để được hỗ trợ các vấn đề về website, vui lòng liên hệ với chúng tôi:</h5>
        <ol>
            <li>Truy cập:<b> https://www.facebook.com/dai.nguyen.971998</b> và gửi yêu cầu hỗ trợ</li>
            <li>Gửi email về kỹ thuật viên: <b>quocdai.09.07@gmail.com.</b></li>
            <li>Gọi vào Hotline hỗ trợ khách hàng:<b> 0123456789</b></li>
        </ol>
    </div>
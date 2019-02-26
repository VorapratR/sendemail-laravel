<style>
    h2{
        text-align: center;
    }
    .content{
        border: 1px solid #008299;
        border-radius: 5px;
        padding: 15px;
    }
    .signature{
        text-align: right;
        padding-top: 30px;
    }
</style>
<h2>สวัสดี {{ $email }}</h2>
<p><strong>แจ้งเรื่อง</strong> {{ $subject }}</p>
<div class="content">
    <p>{!! $content !!}</p>

    <div class="signature">
        <p>ด้วยความนับถือ</p>
        <p>5910110288</p>
    </div>
</div>
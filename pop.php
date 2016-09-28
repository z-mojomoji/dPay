<div id="bgblack"></div>
<div id="popupBlock">
    <a class="x-clos"></a>
    <h2>จะมีบริการนี้ เร็วๆนี้</h2>
</div>


<style>
    #bgblack {
        width: 100%;
        height: 100%;
        position: fixed;
        top: 0;
        left: 0;
        background: rgba(39,43,61,0.6);
        z-index: 2004;
        display: none;
    }

    #popupBlock {
        display: none;
        width: 300px;
        height: 150px;
        padding: 35px 20px;
        box-sizing: border-box;
        position: fixed;
        z-index: 2005;
        border-radius: 5px;
        background-color: #FFF;
        left: calc(50% - 150px);
        top: calc(50% - 75px);
    }

    #popupBlock h2 {
        text-align: center;
        font-size: 40px;
        line-height: 1.7em;
        font-weight: bold;
        font-family: "ThaiSans", Tahoma, sans-serif;
    }

    .x-clos {
        position: absolute;
        top: -18px;
        right: -18px;
        width: 36px;
        height: 36px;
        display: block;
        cursor: pointer;
        z-index: 8040;
        background-image: url(images/fancybox_sprite.png);
    }
</style>

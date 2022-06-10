<template>
    <main>

    <router-view />
        <div class="appWraper">
            <div class="container">
                <div class="search-box">
                    <input class="search-input" type="text" name="q" placeholder="Busca una ruta">
                    <ul class="result-list show">
                        <li class="result-item">
                            <a href="#" class="result-link">
                                <div class="result-title">RUTA</div>
                                <div class="result-component"></div>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum tenetur eveniet quod eos ipsa aliquid
                    nisi, incidunt impedit magni,
                    dicta facere voluptate repellat, aut exercitationem quo laudantium nostrum distinctio maxime!</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet veritatis repellendus quos in! Quis
                    praesentium officiis eveniet.
                    Voluptate sit suscipit consequuntur voluptatum nemo magnam sequi tempore natus, iste mollitia
                    aliquid.</p>
            </div>
        </div>
    </main>
</template>
<script>

export default {

}

</script>
<style>

    ::-webkit-scrollbar{
        width: 10px;
    }

    ::-webkit-scrollbar-track{
        background: #f1f1f1;
    }

    ::-webkit-scrollbar-thumb{
        background: #888;
    }

    ::-webkit-scrollbar-thumb:hover{
        background: #555;
    }
    .container{
        padding: 30px;
    }

    .search-box{
        position: relative;
        display: flex;
        align-items: center;
        flex-direction: column;
    }

    .search-input{
        width: 100%;
        border-radius: 10px;
        border: 0;
        background: #eeeeee;
        padding: 10px 20px;
        font-size:18px ;
        outline: none;
    }

    .result-list.show{
        position: absolute;
        width: 100%;
        max-height: 250px;
        overflow-y:auto ;
        list-style: none;
        background: #fff;
        padding: 0;
        top: 30px;
        border-radius:10px;
        box-shadow: 1px 2px 8px 0px #b5b5b5;

    }

    .result-list.hide{
        display: none;
    }

    .result-item{
        border-bottom: 1px solid #ececec;
    }

    .result-link{
        text-decoration: none;
        color:#333;
        display: block;
        padding: 10px 15px;
    }

    .result-link:hover{
        background: #f9f9f9;
    }

    .result-title{
        font-size: 20px;
        font-weight: 600;
    }

</style>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Priority Sliders</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
    <div id="app">
        <header>
            <h1>Visualize your Priorities</h1>
            <label class="priority-title">I am prioritizing:
                <input type="text" v-model="title">
            </label>
        </header>
        <div class="creating">
            <div class="sliders" v-for="(slider, index) in sliders">
                <label>{{slider.label}}</label>
                <input type="range" class="slider-title" :value="sliders[index]" @change="validate($event, index)" min="0" :max=sliders.length-1>
            </div>
            <label>New priority <input type="text" v-model="label" @keyup.Enter="addSlider"><button class="add" @click="addSlider">+</button></label>
        </div>
        <div class="nav">
            <h2>View other prioritizations</h2>
            <ul>
                <li v-for="(prioritization, index) in prioritizations"><a href='#' @click="loadPriority(index)">{{prioritization.title}}</a></li>
            </ul>
        </div>
        <footer>
            <button class="save" @click="save">Save</button>
        </footer>
    </div>
    <script src="vue.js"></script>
    <script src="main.js"></script>
</body>
</html>
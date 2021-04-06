<!DOCTYPE html>
<html lang="en">
<head>

<style>
.flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}
.title{
    background-color:red;

    display:flex;
    margin-bottom:5px;
    justify-content: center;
    align-items: center;

}
.containerEvents{
    background-color:yellow;
    display:grid;
    grid-template-columns: repeat(4, 2fr);
    padding: 5px;
    grid-gap: 25px;

    justify-content: space-evenly;
    justify-items: center;
    align-content: space-evenly;
    align-items: center;
}

</style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your Events</title>
</head>
<body>
    <div class="title">
        <h1>Your Events</h1>
    </div>
    
    <div class="containerEvents">

        <div class="card">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="img_avatar.png" alt="Avatar" style="width:300px;height:300px;">
                    </div>
                        <div class="flip-card-back">
                        <h1>LABEL</h1> 
                        <p>NAME USER</p> 
                        <p>DATE</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="img_avatar.png" alt="Avatar" style="width:300px;height:300px;">
                    </div>
                        <div class="flip-card-back">
                        <h1>LABEL</h1> 
                        <p>NAME USER</p> 
                        <p>DATE</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="img_avatar.png" alt="Avatar" style="width:300px;height:300px;">
                    </div>
                        <div class="flip-card-back">
                        <h1>LABEL</h1> 
                        <p>NAME USER</p> 
                        <p>DATE</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="img_avatar.png" alt="Avatar" style="width:300px;height:300px;">
                    </div>
                        <div class="flip-card-back">
                        <h1>LABEL</h1> 
                        <p>NAME USER</p> 
                        <p>DATE</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

</body>
</html>

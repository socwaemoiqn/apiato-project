<!DOCTYPE html>
<html>
    <head>
        <title>ShowRoom</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
        <link rel="stylesheet" href="./style.css">

        <style>
            html, body {
                
                height: 100%;
                
            }
            

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
            .logoutButton {
  --figure-duration: 100ms;
  --transform-figure: none;
  --walking-duration: 100ms;
  --transform-arm1: none;
  --transform-wrist1: none;
  --transform-arm2: none;
  --transform-wrist2: none;
  --transform-leg1: none;
  --transform-calf1: none;
  --transform-leg2: none;
  --transform-calf2: none;
  background: none;
  border: 0;
  color: #f4f7ff;
  cursor: pointer;
  display: block;
  font-family: 'Quicksand', sans-serif;
  font-size: 14px;
  font-weight: 500;
  height: 40px;
  outline: none;
  padding: 0 0 0 20px;
  perspective: 100px;
  position: relative;
  text-align: left;
  width: 130px;
  -webkit-tap-highlight-color: transparent;
}
.logoutButton::before {
  background-color: #1f2335;
  border-radius: 5px;
  content: '';
  display: block;
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  transform: none;
  transition: transform 50ms ease;
  width: 100%;
  z-index: 2;
}
.logoutButton:hover .door {
  transform: rotateY(20deg);
}
.logoutButton:active::before {
  transform: scale(0.96);
}
.logoutButton:active .door {
  transform: rotateY(28deg);
}
.logoutButton.clicked::before {
  transform: none;
}
.logoutButton.clicked .door {
  transform: rotateY(35deg);
}
.logoutButton.door-slammed .door {
  transform: none;
  transition: transform 100ms ease-in 250ms;
}
.logoutButton.falling {
  animation: shake 200ms linear;
}
.logoutButton.falling .bang {
  animation: flash 300ms linear;
}
.logoutButton.falling .figure {
  animation: spin 1000ms infinite linear;
  bottom: -1080px;
  opacity: 0;
  right: 1px;
  transition: transform calc(var(--figure-duration) * 1ms) linear, bottom calc(var(--figure-duration) * 1ms) cubic-bezier(0.7, 0.1, 1, 1) 100ms, opacity calc(var(--figure-duration) * 0.25ms) linear calc(var(--figure-duration) * 0.75ms);
  z-index: 1;
}
.logoutButton--light::before {
  background-color: #f4f7ff;
}
.logoutButton--light .button-text {
  color: #1f2335;
}
.logoutButton--light .door,
.logoutButton--light .doorway {
  fill: #1f2335;
}

.button-text {
  color: #f4f7ff;
  font-weight: 500;
  position: relative;
  z-index: 10;
}

svg {
  display: block;
  position: absolute;
}

.figure {
  bottom: 5px;
  fill: #4371f7;
  right: 18px;
  transform: var(--transform-figure);
  transition: transform calc(var(--figure-duration) * 1ms) cubic-bezier(0.2, 0.1, 0.8, 0.9);
  width: 30px;
  z-index: 4;
}

.door,
.doorway {
  bottom: 4px;
  fill: #f4f7ff;
  right: 12px;
  width: 32px;
}

.door {
  transform: rotateY(20deg);
  transform-origin: 100% 50%;
  transform-style: preserve-3d;
  transition: transform 200ms ease;
  z-index: 5;
}
.door path {
  fill: #4371f7;
  stroke: #4371f7;
  stroke-width: 4;
}

.doorway {
  z-index: 3;
}

.bang {
  opacity: 0;
}

.arm1, .wrist1, .arm2, .wrist2, .leg1, .calf1, .leg2, .calf2 {
  transition: transform calc(var(--walking-duration) * 1ms) ease-in-out;
}

.arm1 {
  transform: var(--transform-arm1);
  transform-origin: 52% 45%;
}

.wrist1 {
  transform: var(--transform-wrist1);
  transform-origin: 59% 55%;
}

.arm2 {
  transform: var(--transform-arm2);
  transform-origin: 47% 43%;
}

.wrist2 {
  transform: var(--transform-wrist2);
  transform-origin: 35% 47%;
}

.leg1 {
  transform: var(--transform-leg1);
  transform-origin: 47% 64.5%;
}

.calf1 {
  transform: var(--transform-calf1);
  transform-origin: 55.5% 71.5%;
}

.leg2 {
  transform: var(--transform-leg2);
  transform-origin: 43% 63%;
}

.calf2 {
  transform: var(--transform-calf2);
  transform-origin: 41.5% 73%;
}

@keyframes spin {
  from {
    transform: rotate(0deg) scale(0.94);
  }
  to {
    transform: rotate(359deg) scale(0.94);
  }
}
@keyframes shake {
  0% {
    transform: rotate(-1deg);
  }
  50% {
    transform: rotate(2deg);
  }
  100% {
    transform: rotate(-1deg);
  }
}
@keyframes flash {
  0% {
    opacity: 0.4;
  }
  100% {
    opacity: 0;
  }
}
/**** Wrapper styles ****************/
html,
body {
  height: 100%;
}

body {
  align-items: center;
  background: #f4f7ff;
  display: flex;
  justify-content: center;
  overflow: hidden;
  -webkit-font-smoothing: antialiased;
}
body .background {
  align-items: center;
  display: flex;
  height: 100%;
  justify-content: center;
  width: 50%;
}
body .background--light {
  background: #f4f7ff;
}
body .background--dark {
  background: #1f2335;
}
body button {
  margin: 20px;
}
            
        </style>

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        
    </head>
    <body>
      
        <div class="container" style="width: 100%">
            <div class="content">
              <a href="{{ url('/logout' )}}">
                <div >
      <button class="logoutButton logoutButton--dark">
        <svg class="doorway" viewBox="0 0 100 100">
          <path d="M93.4 86.3H58.6c-1.9 0-3.4-1.5-3.4-3.4V17.1c0-1.9 1.5-3.4 3.4-3.4h34.8c1.9 0 3.4 1.5 3.4 3.4v65.8c0 1.9-1.5 3.4-3.4 3.4z" />
          <path class="bang" d="M40.5 43.7L26.6 31.4l-2.5 6.7zM41.9 50.4l-19.5-4-1.4 6.3zM40 57.4l-17.7 3.9 3.9 5.7z" />
        </svg>
        <svg class="figure" viewBox="0 0 100 100">
          <circle cx="52.1" cy="32.4" r="6.4" />
          <path d="M50.7 62.8c-1.2 2.5-3.6 5-7.2 4-3.2-.9-4.9-3.5-4-7.8.7-3.4 3.1-13.8 4.1-15.8 1.7-3.4 1.6-4.6 7-3.7 4.3.7 4.6 2.5 4.3 5.4-.4 3.7-2.8 15.1-4.2 17.9z" />
          <g class="arm1">
            <path d="M55.5 56.5l-6-9.5c-1-1.5-.6-3.5.9-4.4 1.5-1 3.7-1.1 4.6.4l6.1 10c1 1.5.3 3.5-1.1 4.4-1.5.9-3.5.5-4.5-.9z" />
            <path class="wrist1" d="M69.4 59.9L58.1 58c-1.7-.3-2.9-1.9-2.6-3.7.3-1.7 1.9-2.9 3.7-2.6l11.4 1.9c1.7.3 2.9 1.9 2.6 3.7-.4 1.7-2 2.9-3.8 2.6z" />
          </g>
          <g class="arm2">
            <path d="M34.2 43.6L45 40.3c1.7-.6 3.5.3 4 2 .6 1.7-.3 4-2 4.5l-10.8 2.8c-1.7.6-3.5-.3-4-2-.6-1.6.3-3.4 2-4z" />
            <path class="wrist2" d="M27.1 56.2L32 45.7c.7-1.6 2.6-2.3 4.2-1.6 1.6.7 2.3 2.6 1.6 4.2L33 58.8c-.7 1.6-2.6 2.3-4.2 1.6-1.7-.7-2.4-2.6-1.7-4.2z" />
          </g>
          <g class="leg1">
            <path d="M52.1 73.2s-7-5.7-7.9-6.5c-.9-.9-1.2-3.5-.1-4.9 1.1-1.4 3.8-1.9 5.2-.9l7.9 7c1.4 1.1 1.7 3.5.7 4.9-1.1 1.4-4.4 1.5-5.8.4z" />
            <path class="calf1" d="M52.6 84.4l-1-12.8c-.1-1.9 1.5-3.6 3.5-3.7 2-.1 3.7 1.4 3.8 3.4l1 12.8c.1 1.9-1.5 3.6-3.5 3.7-2 0-3.7-1.5-3.8-3.4z" />
          </g>
          <g class="leg2">
            <path d="M37.8 72.7s1.3-10.2 1.6-11.4 2.4-2.8 4.1-2.6c1.7.2 3.6 2.3 3.4 4l-1.8 11.1c-.2 1.7-1.7 3.3-3.4 3.1-1.8-.2-4.1-2.4-3.9-4.2z" />
            <path class="calf2" d="M29.5 82.3l9.6-10.9c1.3-1.4 3.6-1.5 5.1-.1 1.5 1.4.4 4.9-.9 6.3l-8.5 9.6c-1.3 1.4-3.6 1.5-5.1.1-1.4-1.3-1.5-3.5-.2-5z" />
          </g>
        </svg>
        <svg class="door" viewBox="0 0 100 100">
          <path d="M93.4 86.3H58.6c-1.9 0-3.4-1.5-3.4-3.4V17.1c0-1.9 1.5-3.4 3.4-3.4h34.8c1.9 0 3.4 1.5 3.4 3.4v65.8c0 1.9-1.5 3.4-3.4 3.4z" />
          <circle cx="66" cy="50" r="3.7" />
        </svg>
        <span class="button-text">Log Out</span>
      </button>
    </div>
            </a>
                <div class="title m-b-md">HomePage</div>
                <div class="container">
                  <form action="{{ url('girls/search') }}" method="GET">
                  <input type="text" name="key" placeholder="Input keysearch...!" class="form-control"/>
               
                  <div class="col-auto">
                    <button class="btn btn-lg btn-success" type="submit">Search</button>
                </div>
               </form>
                 
                  <br></br>
                    <div class="row">
                      @if(session('status'))
                      <div class="text-red text-center">{{ session('status') }}</div>
                      @endif
                        <table class="table table-hover table-responsive">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th> Name</th>
                                    <th>Vong1</th>
                                    <th>Vong2</th>
                                    <th>Vong3</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($allgirl as $row)
                                <tr id="d1">
                                    <td id="t">{{$row->id}}</td>
                                    <td id="l1"><a href="/girls/detail/{{$row->id}}">{{$row->ten}}</td>
                                    <td id="m1">{{$row->Vong1}}</td>
                                    <td id="m2">{{$row->Vong2}}</td>
                                    <td id="m2">{{$row->Vong3}}</td>
                                    <td><a href="/girls/{{$row->id}}/edit"><button type="button"   class="update btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span></button></td>
                                    <form method="POST" action="/girls/delete/{{$row->id}}" onsubmit="return ConfirmDelete( this )">

                                      @csrf
                                    <td><button type="submit"  class="delete btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button></td>
                                  </form>
                                </tr>
                                
                                
                                @endforeach
                            </tbody>
                        </table>
                        {!! $allgirl->render() !!}


                    </div>
                </div>
                
                <tr>
                  <a href="{{ url('/girls/create') }}">
                    <button class="btn btn-lg btn-success" type="button">Create Girls</button>
                  </a>
                  
                  <a href="{{ url('/fans/fansindex') }}">
                    <button class="btn btn-lg btn-success" type="button">Fans</button>
                  </a>
                </tr>
                <br></br>
                <tr>
                  
              </tr>
            </div>
        </div>
        
        <script>
          document.querySelectorAll('.logoutButton').forEach(button => {
  button.state = 'default'

  // function to transition a button from one state to the next
  let updateButtonState = (button, state) => {
    if (logoutButtonStates[state]) {
      button.state = state
      for (let key in logoutButtonStates[state]) {
        button.style.setProperty(key, logoutButtonStates[state][key])
      }
    }
  }

  // mouse hover listeners on button
  button.addEventListener('mouseenter', () => {
    if (button.state === 'default') {
      updateButtonState(button, 'hover')
    }
  })
  button.addEventListener('mouseleave', () => {
    if (button.state === 'hover') {
      updateButtonState(button, 'default')
    }
  })

  // click listener on button
  button.addEventListener('click', () => {
    if (button.state === 'default' || button.state === 'hover') {
      button.classList.add('clicked')
      updateButtonState(button, 'walking1')
      setTimeout(() => {
        button.classList.add('door-slammed')
        updateButtonState(button, 'walking2')
        setTimeout(() => {
          button.classList.add('falling')
          updateButtonState(button, 'falling1')
          setTimeout(() => {
            updateButtonState(button, 'falling2')
            setTimeout(() => {
              updateButtonState(button, 'falling3')
              setTimeout(() => {
                button.classList.remove('clicked')
                button.classList.remove('door-slammed')
                button.classList.remove('falling')
                updateButtonState(button, 'default')
              }, 1000)
            }, logoutButtonStates['falling2']['--walking-duration'])
          }, logoutButtonStates['falling1']['--walking-duration'])
        }, logoutButtonStates['walking2']['--figure-duration'])
      }, logoutButtonStates['walking1']['--figure-duration'])
    }
  })
})

const logoutButtonStates = {
  'default': {
    '--figure-duration': '100',
    '--transform-figure': 'none',
    '--walking-duration': '100',
    '--transform-arm1': 'none',
    '--transform-wrist1': 'none',
    '--transform-arm2': 'none',
    '--transform-wrist2': 'none',
    '--transform-leg1': 'none',
    '--transform-calf1': 'none',
    '--transform-leg2': 'none',
    '--transform-calf2': 'none'
  },
  'hover': {
    '--figure-duration': '100',
    '--transform-figure': 'translateX(1.5px)',
    '--walking-duration': '100',
    '--transform-arm1': 'rotate(-5deg)',
    '--transform-wrist1': 'rotate(-15deg)',
    '--transform-arm2': 'rotate(5deg)',
    '--transform-wrist2': 'rotate(6deg)',
    '--transform-leg1': 'rotate(-10deg)',
    '--transform-calf1': 'rotate(5deg)',
    '--transform-leg2': 'rotate(20deg)',
    '--transform-calf2': 'rotate(-20deg)'
  },
  'walking1': {
    '--figure-duration': '300',
    '--transform-figure': 'translateX(11px)',
    '--walking-duration': '300',
    '--transform-arm1': 'translateX(-4px) translateY(-2px) rotate(120deg)',
    '--transform-wrist1': 'rotate(-5deg)',
    '--transform-arm2': 'translateX(4px) rotate(-110deg)',
    '--transform-wrist2': 'rotate(-5deg)',
    '--transform-leg1': 'translateX(-3px) rotate(80deg)',
    '--transform-calf1': 'rotate(-30deg)',
    '--transform-leg2': 'translateX(4px) rotate(-60deg)',
    '--transform-calf2': 'rotate(20deg)'
  },
  'walking2': {
    '--figure-duration': '400',
    '--transform-figure': 'translateX(17px)',
    '--walking-duration': '300',
    '--transform-arm1': 'rotate(60deg)',
    '--transform-wrist1': 'rotate(-15deg)',
    '--transform-arm2': 'rotate(-45deg)',
    '--transform-wrist2': 'rotate(6deg)',
    '--transform-leg1': 'rotate(-5deg)',
    '--transform-calf1': 'rotate(10deg)',
    '--transform-leg2': 'rotate(10deg)',
    '--transform-calf2': 'rotate(-20deg)'
  },
  'falling1': {
    '--figure-duration': '1600',
    '--walking-duration': '400',
    '--transform-arm1': 'rotate(-60deg)',
    '--transform-wrist1': 'none',
    '--transform-arm2': 'rotate(30deg)',
    '--transform-wrist2': 'rotate(120deg)',
    '--transform-leg1': 'rotate(-30deg)',
    '--transform-calf1': 'rotate(-20deg)',
    '--transform-leg2': 'rotate(20deg)'
  },
  'falling2': {
    '--walking-duration': '300',
    '--transform-arm1': 'rotate(-100deg)',
    '--transform-arm2': 'rotate(-60deg)',
    '--transform-wrist2': 'rotate(60deg)',
    '--transform-leg1': 'rotate(80deg)',
    '--transform-calf1': 'rotate(20deg)',
    '--transform-leg2': 'rotate(-60deg)'
  },
  'falling3': {
    '--walking-duration': '500',
    '--transform-arm1': 'rotate(-30deg)',
    '--transform-wrist1': 'rotate(40deg)',
    '--transform-arm2': 'rotate(50deg)',
    '--transform-wrist2': 'none',
    '--transform-leg1': 'rotate(-30deg)',
    '--transform-leg2': 'rotate(20deg)',
    '--transform-calf2': 'none'
  }
}
        </script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <br></br>
        
    </body>
</html>
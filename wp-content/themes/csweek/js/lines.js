$(document).ready(function() {
  function isiPhone(){
    return (
      (navigator.platform.indexOf("iPhone") != -1) ||
      (navigator.platform.indexOf("iPod") != -1)
    );
  }

  /* Canvas */
  var mouse_e = {pageX: 0, pageY: 0};
  var canvas = document.getElementById('nodes');
  var ctx = canvas.getContext('2d');
          
  var fps = isiPhone() ? 10 : 30;
  var total_nodes = isiPhone() ? 25 : 999;
  var min_speed = 666;
  var nodes_speed = 111;
  var nodes = [];
  var min_dist = 60;
  var move = true;
  var draw_to_mouse = false;
  var gather_nodes = false;
  var circle_radius = 100;
  var line_opacity = 0.7;
  
  //
  init_node = function(){
    var c_width = ctx.canvas.width;
    var c_height = ctx.canvas.height;
    var node = {cx:     Math.round(Math.random() * c_width), 
                cy:     Math.round(Math.random() * c_height),
                dx:    Math.round(Math.random() * c_width),
                dy:    Math.round(Math.random() * c_height),
                speed: Math.round(min_speed + Math.random() * nodes_speed),
                gather: false
                };
    nodes.push(node);
  }

  // Init nodes
  // for(var i = 0; i < total_nodes; i++) {
  //   init_node()
  // }

  // init_another_node = function(){
  //   init_node()
  //   setTimeout(init_another_node, 100)
  // }
  // init_another_node()

  // setTimeout(funct)
  
  frame = function() {
    
    if(total_nodes > nodes.length)
      init_node();

    var c_width = ctx.canvas.width;
    var c_height = ctx.canvas.height;
    
    if(move) {
      // Redraw
      canvas.width = canvas.width;
      ctx.clearRect(0, 0, c_width, c_height);
      
      for(var i = 0; i < nodes.length; i++) {
      
        var node = nodes[i];
        node.cx += (node.dx - node.cx) / node.speed;
        node.cy += (node.dy - node.cy) / node.speed;
              
        // ctx.fillStyle = 'rgba(0, 0, 0, ' + ((1 - line_opacity) * 0.5) + ')';
        // ctx.fillStyle = 'rgba(0, 0, 0, 0.3)';
        ctx.fillStyle = 'rgba(255,255,255, 0.2)';
        ctx.beginPath();
        ctx.arc(node.cx, node.cy, 1, 0, Math.PI * 2, true); 
        ctx.closePath();
        ctx.fill();
      
        if((node.cx >= node.dx - 1) && 
           (node.cx <= node.dx + 1) && 
           (node.cy >= node.dy - 1) && 
           (node.cy <= node.dy + 1)) {
          
          if(!node.gather) {
            node.dx = Math.round(Math.random() * c_width);
            node.dy = Math.round(Math.random() * c_height);
          } else {
            var radian = ((Math.random() * 360) / 180) * Math.PI;
            node.dx = (c_width / 2) + (Math.cos(radian) * circle_radius);
            node.dy = (c_height / 2) - (Math.sin(radian) * circle_radius);
          }
        }
      }
      
      web_nodes();
    }
  
    // Keep playing
    setTimeout(function() { frame(); }, 2000 / fps);
  };
  frame();
  
  function web_nodes() {
    for(a = 0; a < nodes.length; a++) {
      
      if(draw_to_mouse && !nodes[a].gather) {
        mouse_x = mouse_e.pageX - $('#nodes').offset().left;
        mouse_y = mouse_e.pageY - $('#nodes').offset().top;
        x_dist = nodes[a].cx - mouse_x;
        y_dist = nodes[a].cy - mouse_y;
        dist = Math.sqrt(Math.pow(x_dist, 2) + Math.pow(y_dist, 2));
        draw_line(nodes[a].cx + 1, nodes[a].cy + 1, mouse_x, mouse_y, (min_dist - dist) / 100);
      }
      
      for(b = a + 1; b < nodes.length; b++){
      
        x_dist = nodes[a].cx - nodes[b].cx;
        y_dist = nodes[a].cy - nodes[b].cy;
        dist = Math.sqrt(Math.pow(x_dist, 2) + Math.pow(y_dist, 2));
        
        if(dist <= min_dist) {
          draw_line(nodes[a].cx + 1, nodes[a].cy + 1, nodes[b].cx + 1, nodes[b].cy + 1, (min_dist - dist) / 100);
        }  
      }  
    }  
  }
  
  function draw_line(x1, y1, x2, y2, alpha) {
    //ctx.strokeStyle = 'rgba(0, 0, 0, ' + (alpha * line_opacity) + ')';
    ctx.strokeStyle = 'rgba(255,255,255, 0.05)';
    ctx.beginPath();
    ctx.moveTo(x1, y1);
    ctx.lineTo(x2, y2);
    ctx.stroke();
  }
  
  function releaseNodes() {
    for(a = 0; a < total_nodes; a++) {
      nodes[a].gather = false;
      nodes[a].dx = Math.round(Math.random() * c_width);
      nodes[a].dy = Math.round(Math.random() * c_height);
    }
  }
  
  function gatherNodes() {
    for(a = 0; a < total_nodes; a++) {
      nodes[a].gather = true;
      
      var radian = ((Math.random() * 360) / 180) * Math.PI;
      nodes[a].dx = (c_width / 2) + (Math.cos(radian) * circle_radius);
      nodes[a].dy = (c_height / 2) - (Math.sin(radian) * circle_radius);
    }
  }
  
  function fadeToNodes(from) {
    line_opacity = from / 100;
    if(from > 0) {
      setTimeout(function() { fadeToNodes(from - 1); }, 5);
    }
  }
  
  function fadeToLines(from) {
    line_opacity = from / 100;
    if(from < 100) {
      setTimeout(function() { fadeToLines(from + 1); }, 5);
    }
  }
  
  //$(document).mousemove(function(e) {
  //  mouse_e = e;
  //});
  
  // Main Circle
  $('#circle').click(function() { 
    if($('#circle').hasClass('clicked')) {
      $('#circle').removeClass('clicked');
      releaseNodes();
      fadeToLines(0);
    } else {
      $('#circle').addClass('clicked');
      gatherNodes();
      fadeToNodes(100);
    }
  });

});
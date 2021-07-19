    function addTriangles(ele, size, density, number, speed, color){
        if ($("> .triangles", ele).length){
            return;
        }
        let id = "T" + randomString(32);
        $(ele).append("<div class='triangles' id='" + id + "'>");
        particlesJS(id, {
            "particles": {
                "number": {
                    "value": number,
                    "density": {
                        "enable": true,
                        "value_area": density
                    }
                },
                "color": {
                    "value": color
                },
                "shape": {
                    "type": "triangle",
                    "stroke": {
                        "width": 0,
                        "color": "#000000"
                    },
                    "polygon": {
                        "nb_sides": 5
                    },
                    "image": {
                        "src": "img/github.svg",
                        "width": 100,
                        "height": 100
                    }
                },
                "opacity": {
                    "value": 0.22885281607335908,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 1,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": size,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 59.94005994005994,
                        "size_min": 0.1,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": false,
                    "distance": 500,
                    "color": "#ffffff",
                    "opacity": 0.4,
                    "width": 2
                },
                "move": {
                    "enable": true,
                    "speed": speed,
                    "direction": "top",
                    "random": true,
                    "straight": true,
                    "out_mode": "out",
                    "bounce": false,
                    "attract": {
                        "enable": false,
                        "rotateX": 315.65905665290904,
                        "rotateY": 1200
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": false,
                        "mode": "repulse"
                    },
                    "onclick": {
                        "enable": false,
                        "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance": 400,
                        "line_linked": {
                            "opacity": 0.5
                        }
                    },
                    "bubble": {
                        "distance": 400,
                        "size": 4,
                        "duration": 0.3,
                        "opacity": 1,
                        "speed": 3
                    },
                    "repulse": {
                        "distance": 200,
                        "duration": 0.4
                    },
                    "push": {
                        "particles_nb": 4
                    },
                    "remove": {
                        "particles_nb": 2
                    }
                }
            },
            "retina_detect": true
        });
    }
    function addTrianglesForPage(){
        addTriangles($(".leftbar-banner")[0], 100, 500, 200, 3, "#fff");
        addTriangles($("#footer")[0], 150, 700, 125, 3, "#fff");
        $(".btn.btn-primary, .btn.btn-danger").each(function(index, ele) {
            addTriangles(ele, 60, 25, 50, 2, "#fff")
        });
        $(".related-post-card").each(function(index, ele) {
            addTriangles(ele, 100, 500, 125, 3, "#fff");
        });
        $("#main > .card, #leftbar > .card").each(function(index, ele) {
            addTriangles(ele, 100, 500, 125, 3, "#999");
        });
        addTriangles($("#banner > .shape")[0], 205, 2840, 115, 4, "#fff")
    }
    addTrianglesForPage();

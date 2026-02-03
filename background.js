    import { animate, stagger, motion } from "https://cdn.jsdelivr.net/npm/motion@10/+esm";

    window.onload = () => {

      animate(".orb1", {
        x: [-40, 40, -40],
        y: [-30, 30, -30],
        opacity: [0, 1],
        scale: [0.5, 1.5],

      }, {
        duration: 1.5,
        repeat: Infinity,
        ease: "linear",
        delay: 0
      });

      animate(".orb2", {
        x: [-40, 40, -40],
        y: [-30, 30, -30],
        opacity: [0, 1],
        scale: [0.5, 1]
      }, {
        duration: 1.5,
        repeat: Infinity,
        easing: "linear",
        delay: 0.4
      });

      animate(".orb3", {
        x: [-40, 40, -40],
        y: [-30, 30, -30],
        opacity: [0, 1],
        scale: [0.5, 1]
      }, {
        duration: 1.5,
        repeat: Infinity,
        easing: "linear",
        delay: 0.2
      });

      animate(".orb4", {
        x: [-40, 40, -40],
        y: [-30, 30, -30],
        opacity: [0, 1],
        scale: [0.5, 1]
      }, {
        duration: 1.5,
        repeat: Infinity,
        easing: "linear",
        delay: 0.8
      });



      animate(".card", {
        opacity: [0, 0.5],
        y: [30, 0]
      }, {
        delay: stagger(8),
        duration: 1
      });

      animate(".sidebar-item", {
        opacity: [0, 1],
        x: [-20, 0]
      }, { delay: stagger(.05), duration: .6 });
    }
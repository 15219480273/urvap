function twentytwentyoneResponsiveEmbeds(){var proportion,parentWidth;document.querySelectorAll('iframe').forEach(function(iframe){if(iframe.width&&iframe.height){proportion=parseFloat(iframe.width)/parseFloat(iframe.height);parentWidth=parseFloat(window.getComputedStyle(iframe.parentElement,null).width.replace('px',''));iframe.style.maxWidth='100%';iframe.style.maxHeight=Math.round(parentWidth/proportion).toString()+'px';}});}twentytwentyoneResponsiveEmbeds();window.onresize=twentytwentyoneResponsiveEmbeds;
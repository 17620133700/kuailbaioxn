var m = document.querySelectorAll('code[markdown]');
        for (var i = 0; i < m.length; i++) {
            console.log(m[i].innerHTML.trim())
            console.log(marked.parse(m[i].innerHTML.trim()))
            m[i].outerHTML = marked.parse(m[i].innerHTML.trim());
            console.log(m[i].outerHTML)
        }
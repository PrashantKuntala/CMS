/*

author : prashant kumar kuntala
date   : April 29th, 2015

*/

function appear(opt)
{      
    switch(opt){
            case 1: document.getElementById('mail').style.display='block';
                    document.getElementById('regbutton').style.display='none';
                    document.getElementById('head').innerHTML='Register';
                    break;
            case 2: document.getElementById('ename').style.display='none';
                    document.getElementById('apara').style.display='none';
                    document.getElementById('aboutform').style.display='block';
                    break;
            case 3: document.getElementById('sname').style.display='none';                    
                    document.getElementById('subjectform').style.display='block';
                    break;
    }  
}

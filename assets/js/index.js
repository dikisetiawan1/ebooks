// detail-course page
           
           var optionCourse = document.querySelector("#option");
            var videos = document.querySelector("#videoCourse");
            var textScript = document.querySelector("#textscriptCourse");
            var btn = document.querySelector("#ubah");

            let text = "";

            btn.addEventListener("click", function() {
                let text = "";

                if (optionCourse.value == "textscript") {
                    text += textScript.style.visibility = 'visible';
                }else if (optionCourse.value == "textscript") {
                    text += videos.style.visibility = 'hidden';

                }
                    
                sectionOption.innerHTML = text;
            })
    //end  detail-course page
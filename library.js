function getIdImageUrl(StringId){
            var id = Number(StringId);
               if(id.toString().length == 6){
                    var url = "https://skystorage.iscorp.com/pictures/tx/fortbend//0" + id +  ".JPG";
                    return url;
               }
               else{
                   return null;
               }
        }
        function getIdImageHTML(StringId){
            var url = getIdImageUrl(StringId);
            if(url !== null){
                return "<img src=" + url + ">";
            }
            else{
                return "";
            }
        }
        function getIdImageHTMLwithDim(StringId,w,h){
            var url = getIdImageUrl(StringId);
            if(url !== null){
                return "<img src=" + url + " height='" + Number(h) + "' width ='" + Number(w) + "'>";
            }
            else{
                return "";
            }
        }
window.addEventListener('load',()=>{
    menuEffect();
    visualEffect();
    bestItemEffect()
    mainCollectionEffect()
    

})

document.addEventListener('DOMContentLoaded',()=>{
    
    nearProduct();
    category();

})


function nearProduct(){
    
    const checkList=document.querySelectorAll('#check_list>li')
    
    let selectedMenu=checkList[0];
    
    selectedMenu.classList.add('check_list_selected')
    

    for(const item of checkList){
        
        item.addEventListener('click',menuActivate)

    }
    

    function menuActivate(){

       
        if(selectedMenu!=null){
            selectedMenu.classList.remove('check_list_selected')
        }
        
        
        selectedMenu=this;
        selectedMenu.classList.add('check_list_selected')

       
    }
}



function category(){
    const categoryList=document.querySelectorAll('.category_list>li>a')

    let selectedMenu=0;

    
    for(const item of categoryList){
        item.addEventListener('click',menuActivate)
    }
    

    function menuActivate(){
        if(selectedMenu!=null){
            selectedMenu.classList.remove('category_selected')
        }
        
           
        
        selectedMenu=this;
        selectedMenu.classList.add('category_selected')

       
    }

}



function mainCollectionEffect(){
    
    //const mainBlock=document.querySelector('#contents_maincollection_wrap::before')
    const mainCollectionWrap=document.querySelector('#contents_maincollection_wrap')
    const mainCollectionImg=document.querySelector('#maincollection_img')
    const subCollectionLi=document.querySelectorAll('#subcollection_img_list>li')
    //alert(subCollectionLi.length)

    const newMainBlock=document.createElement('div')
    newMainBlock.className='main_block';
    mainCollectionWrap.prepend(newMainBlock)

    window.addEventListener('scroll',windowScroll)

    function windowScroll(){
        
        let scrollHeight=window.pageYOffset;

        if(scrollHeight>1460){
            //alert('1500을넘었다')
            gsap.to(newMainBlock,{opacity:1,width:50+'%',duration:1,esae:'power1.out',onComplete:()=>{
                gsap.to(mainCollectionImg,{display:'block',opacity:1,top:0,duration:0.5,ease:'power1.out',onComplete:()=>{
                    
                }})
            }})
            
        }
        // if(scrollHeight<1000){
        //     //alert('1500을넘었다')
        //     gsap.to(newMainBlock,{opacity:0,width:-60+'%',duration:1,esae:'power1.out',onComplete:()=>{
        //         gsap.to(mainCollectionImg,{display:'block',opacity:0,top:0,duration:0.5,ease:'power1.out',onComplete:()=>{
                    
        //         }})
        //     }})
            
        // }

        if(scrollHeight>2000){
            
            for(let i=0; i<subCollectionLi.length; i++){
                
                gsap.to(subCollectionLi[i],{display:'block',top:-20, duration:0.5+(0.5*i),ease:'power1.out',onComplete:()=>{
                    
                }})
                //console.log(i)
            }
        }

        // if(scrollHeight>2000){
        //                 gsap.to(subCollectionLi[0],{display:'block',opacity:1,duration:0.7,ease:'power1.out',onComplete:()=>{
        //                     gsap.to(subCollectionLi[1],{display:'block',opacity:1,duration:0.5,ease:'power1.out',onComplete:()=>{
        //                         gsap.to(subCollectionLi[2],{display:'block',opacity:1,duration:0.5,ease:'power1.out'})
        //                     }})
        //                 }})
        //             }




    }
}

function menuEffect(){
    const headerWrap=document.querySelector('#header_wrap')
    const mainMenu=document.querySelector('#mainmenu')
    const mainMenuA=document.querySelectorAll('#mainmenu_list>li>a')
    const mainMenuLi=document.querySelector('#mainmenu_list>li')
    const subMenu=document.querySelectorAll('.submenu_list')
    //const subMenuBg=document.querySelectorAll('.submenu_list>li::before')
    const menuBar=document.querySelector('#menu_bar')

    

    let mainMenuLiWidth;
    let menuBarWidth=menuBar.offsetWidth;
    let selectedMenu;
    let mainMenuLiPosition;

    
    init();
    initEvent();
    

   function init(){

    let mainMenuLiWidth=mainMenuLi.offsetWidth;
       gsap.set(menuBar,{left:mainMenuLiWidth/2-55,display:'none'})
       
   }

   function initEvent(){
       window.addEventListener('resize',Reset)
        for(item of mainMenuA){
            item.addEventListener('mouseenter',menuOver)
            item.addEventListener('focus',menuOver)
            
        
    }
   headerWrap.addEventListener('mouseleave',menuOut)
 

   const subMenu_a=document.querySelectorAll('.submenu_list>li>a')
   subMenu_a[subMenu_a.length-1].addEventListener('focusout',menuOut)

   }



    function menuOver(){
        gsap.set(menuBar,{opacity:1})
       let overNum=getIndex(this)

       slideBar(overNum);  
       showSubMenu(overNum);
                    
                   
        
    }

    function Reset(){
        let overNum=getIndex(this)

        menuBarReset(overNum)
        
    }

    function menuBarReset(num){
        let mainMenuLiWidth=mainMenuLi.offsetWidth;
        

        gsap.set(menuBar,{left:(num*mainMenuLiWidth)+mainMenuLiWidth/2-55})

    }

    function getIndex(num){
        let checkMenu=num.parentElement;
        let selectedIndex=0;

        while((checkMenu=checkMenu.previousElementSibling)!=null){
            selectedIndex++;
            
        }               
        
        return selectedIndex;
    }

    function slideBar(num){
        let mainMenuLiWidth=mainMenuLi.offsetWidth;
        gsap.set(menuBar,{display:'block'})
        gsap.to(menuBar,{left:(num*mainMenuLiWidth)+mainMenuLiWidth/2-55, duration:0.5, ease:'power1.out'})
        
    }


    function menuOut(){
       
       gsap.set(subMenu,{opacity:0,duration:0.05,ease:'power1.out',onComplete:()=>{
            gsap.set(subMenu,{display:'none'})
            gsap.set(menuBar,{display:'none'})

            
       }})
       selectedMenu.classList.remove('selected_menu')

       selectedMenu=null; 
        
    }


    function showSubMenu(num){

        if(selectedMenu!=null && selectedMenu!=mainMenuA[num]){
            
        
            let oldSubMenu=selectedMenu.nextElementSibling;
            gsap.to(oldSubMenu,{opacity:0, duration:0.3, ease:'power1.out', onComplete:()=>{

                oldSubMenu.style.display='none'
                
            }})


             selectedMenu.classList.remove('selected_menu')
        }

        

        if(selectedMenu!=mainMenuA[num]){
            selectedMenu=mainMenuA[num]               
        
        let newSubMenu=selectedMenu.nextElementSibling;

        selectedMenu.classList.add('selected_menu')

        gsap.set(newSubMenu,{display:'block'})
        
        gsap.to(newSubMenu,{opacity:0.9,duration:0.3,ease:'power1.out'})
        }
          

    }
}




function bestItemEffect(){
    const bestItemWrap=document.querySelector('#contents_bestitem_wrap')
    const bestItemInner=document.querySelector('#contents_bestitem_inner')
    const bestItemListWrap=document.querySelector('#ul_wrap')
    const bestItemList=document.querySelectorAll('.bestitem_list')
    const bestItemLi=document.querySelectorAll('.bestitem_list>li')

    let bestItemLength=bestItemList.length;
    let bestItemWidth;
    let timer;
    let isSlide=false;
    
    

   


    init();
    autoPlay();
    initEvent();
    


    function init(){
        bestItemWidth=bestItemInner.offsetWidth;
        gsap.set(bestItemListWrap,{width:bestItemWidth*bestItemLength})
        let lastItemList=bestItemListWrap.lastElementChild;

        bestItemListWrap.prepend(lastItemList)
        gsap.set(bestItemListWrap,{left:-bestItemWidth})
    }

    function initEvent(){
        window.addEventListener('resize',bestItemReset)
        
        document.querySelector('#next_btn').addEventListener('click',slideNext)
        document.querySelector('#prev_btn').addEventListener('click',slidePrev)
        document.querySelector('#next_btn').addEventListener('mouseenter',stopAutoPlay)
        document.querySelector('#prev_btn').addEventListener('mouseenter',stopAutoPlay)
        bestItemListWrap.addEventListener('mouseenter',stopAutoPlay)
        bestItemListWrap.addEventListener('mouseleave',autoPlay)
    }

    function bestItemReset(){
        bestItemWidth=bestItemInner.offsetWidth;

        gsap.set(bestItemList,{width:bestItemWidth})
        gsap.set(bestItemListWrap,{left:-bestItemWidth})
        
        


    }

    function slideNext(){
        if(isSlide==false){
            isSlide=true;
            
            let currentPosition=bestItemListWrap.offsetLeft;
            //alert(currentPosition)
            let firstItemList=bestItemListWrap.firstElementChild;

            gsap.to(bestItemListWrap,{left:currentPosition-bestItemWidth,duration:1,ease:'power1.out',onComplete:()=>{
                
                bestItemListWrap.append(firstItemList)
                
                gsap.set(bestItemListWrap,{left:-bestItemWidth})
                isSlide=false;
            }})
        }
    }

    function slidePrev(){
        if(isSlide==false){
            isSlide=true;
            let lastItemList=bestItemListWrap.lastElementChild;
            let currentPosition=bestItemListWrap.offsetLeft;
            //alert(currentPosition)
            

            gsap.to(bestItemListWrap,{left:currentPosition+bestItemWidth,duration:1,ease:'power1.out',onComplete:()=>{
                
                bestItemListWrap.prepend(lastItemList)
                
                gsap.set(bestItemListWrap,{left:-bestItemWidth})
                isSlide=false;
            }})
        }
    }

    function autoPlay(){
        timer=setInterval(slideNext,3000)
    }

    function stopAutoPlay(){
        clearInterval(timer)
    }
}












function visualEffect(){
    const visualWrap=document.querySelector('#visual_wrap')
    const visualInner=document.querySelector('#visual_inner')
    const visualList=document.querySelector('#visual_list')
    const visualLi=document.querySelectorAll('#visual_list>li')
    const visualImg=document.querySelectorAll('#visual_list>li>a>img')
    const dot=document.querySelectorAll('#slide_gather>li')
    
    const visualTitle=document.querySelectorAll('.visual_title')
    const visualText=document.querySelectorAll('.visual_text')

    let visualLength=visualLi.length;
    let visualWidth;
    let selectedDot=dot[0]
    let dotClickNum=0;
    let timer;
    let currentIndex=0;
    let nextIndex;
    let isSlide=false;


    visualReset();
    init();
    visualFade(0)
    dotActivate(0)
    autoPlay();
    initEvent();


    function visualReset(){
        visualWidth=visualLi.offsetWidth;

        gsap.set(visualList,{width:visualWidth})
        gsap.set(visualLi,{width:visualWidth})
        gsap.set(visualImg,{width:visualWidth})
        gsap.set(visualWrap,{height:visualImg[0].offsetHeight})
    }

    function init(){
        gsap.set(visualLi,{opacity:0})
        gsap.set(visualLi[0],{opacity:1})
    }


    function initEvent(){
        window.addEventListener('resize',visualReset) 
    
        for(const item of dot){ 
        item.addEventListener('click',dotClick)
        item.addEventListener('click',stopAutoPlay)
    }
    visualInner.addEventListener('mouseenter',stopAutoPlay)
    visualInner.addEventListener('mouseleave',autoPlay)
    
    

    }



    function dotClick(){
        dotClickNum=getIndex(this)

        dotActivate(dotClickNum)
        visualFade(dotClickNum)
        


    }

    function getIndex(checkMenu){
        let selectedIndex=0;

        while((checkMenu=checkMenu.previousElementSibling)!=null){
            selectedIndex++;
        }
        //alert(selectedIndex)
        return selectedIndex;
        

    }

    function dotActivate(num){
        if(selectedDot!=null){
        selectedDot.classList.remove('selected');
        
        }
        selectedDot=dot[num]
        selectedDot.classList.add('selected')
        
        
    }

    function visualFade(num){
        

        nextIndex=num
        

        gsap.to(visualImg[currentIndex],{scale:(1.1,1.1),duration:2,ease:'power.out'})
        gsap.to(visualImg[nextIndex],{scale:(1,1),duration:2,ease:'power.out'})
        
       
        


        gsap.to(visualLi[currentIndex],{opacity:0,duration:1,ease:'power.out',onComplete:()=>{
            gsap.to(visualTitle[currentIndex],{top:20+'%',opacity:0,duration:1,ease:'power1.out',onComplete:()=>{
                gsap.to(visualText[currentIndex],{opacity:0,duration:1,ease:'power1.out'})
                
            }})
            
        }})

        

        


        gsap.to(visualLi[nextIndex],{opacity:1,duration:1,ease:'power.out',onComplete:()=>{
            gsap.to(visualTitle[nextIndex],{top:35+'%',opacity:1,duration:1,ease:'power1.out',onComplete:()=>{
                gsap.to(visualText[nextIndex],{opacity:1,duration:1,ease:'power1.out'})
                currentIndex=nextIndex

            }})
        }})

       
       

       
            
                                     
        
    }

    function stopAutoPlay(){
        clearInterval(timer)
    }

    function autoPlay(){
     timer=setInterval(autoCount,4000)

    }

    function autoCount(){ 

        dotClickNum++;
        if(dotClickNum>=visualLength){
        dotClickNum=0;
        }
        dotActivate(dotClickNum); 
        visualFade(dotClickNum); 
    }

   


}

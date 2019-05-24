var puzzle=document.getElementById('puzzle');
var win=document.getElementById('win');
var a=["Fotot/p1.jpg","Fotot/p2.jpg","Fotot/p3.jpg","Fotot/p4.jpg","Fotot/p5.jpg","Fotot/p6.jpg",
        "Fotot/p7.jpg","Fotot/p8.jpg","Fotot/p9.jpg","Fotot/p10.jpg","Fotot/p11.jpg","Fotot/p12.jpg",
        "Fotot/p13.jpg","Fotot/p14.jpg","Fotot/p15.jpg","Fotot/p16.jpg"]
       
        .map( (x,i)=>[x,i,Math.random()])
        .sort((a,b)=> a[2]-b[2])

        for(let i=0;i<a.length;i++){
        	let pic=document.createElement('img');
        
        pic.src=a[i][0];
        pic.place=a[i][1];
        pic.clicked=false;
        puzzle.appendChild(pic);
    }
    var step=1;
    var p1,p2;
    document.addEventListener('click',function(e){
    	switch(step){
    		case 1:
    		if(e.target.tagName=='IMG' && !e.target.clicked){
    			e.target.className='select';
    			e.clicked=true;
    			p1=e.target;
    			step=2;
    		}
    		break;
    		case 2:
    		if(e.target.tagName=='IMG' && !e.target.clicked){
    			e.target.className='select';
    			e.clicked=true;
    			p2=e.target;
    			step=3;
    		}
    		break;
    		case 3:
    		let place=p2.place;
    		let src=p2.src;
    		p2.place=p1.place;
    		p2.src=p1.src;
    		p1.place=place;
    		p1.src=src;
    		p1.className=p2.className="";
    		step=1;
    		if(isWin()){
                win.textContent="You just won the game!";
    			step=4;
    		}
    		break;
    	}

    })
    function isWin(){
    	let pics=document.getElementsByTagName('img');
    	for(let i=0;i<pics.length;i++) if(pics[i].place!=i) return false;
    	return true;
    }

<script>//(c)2010 Oscar Toledo G.
var B,i,y,u,b,I=[],G=120,x=10,z=15,M=1e4,l=[5,3,4,6,2,4,3,5,1,1,1,1,1,1,1,1,9,9
,9,9,9,9,9,9,13,11,12,14,10,12,11,13,0,99,0,306,297,495,846,-1,0,1,2,2,1,0,-1,-
1,1,-10,10,-11,-9,9,11,10,20,-9,-11,-10,-20,-21,-19,-12,-8,8,12,19,21];function
X(w,c,h,e,S,s){var t,o,L,E,d,O=e,N=-M*M,K=78-h<<x,p,g,n,m,A,q,r,C,J,a=y?-x:x;
y^=8;G++;d=w||s&&s>=h&&X(0,0,0,21,0,0)>M;do{if(o=I[p=O]){q=o&z^y;if(q<7){A=q--&
2?8:4;C=o-9&z?[53,47,61,51,47,47][q]:57;do{r=I[p+=l[C]];if(!w|p==w){g=q|p+a-S?0
:S;if(!r&(!!q|A<3||!!g)||(r+1&z^y)>9&&q|A>2){if(m=!(r-2&7))return y^=8,I[G--]=
O,K;J=n=o&z;E=I[p-a]&z;t=q|E-7?n:(n+=2,6^y);while(n<=t){L=r?l[r&7|32]-h-q:0;if(
s)L+=(1-q?l[(p-p%x)/x+37]-l[(O-O%x)/x+37]+l[p%x+38]*(q?1:2)-l[O%x+38]+(o&16)/2:
!!m*9)+(!q?!(I[p-1]^n)+!(I[p+1]^n)+l[n&7|32]-99+!!g*99+(A<2):0)+!(E^y^9);if(s>h
||1<s&s==h&&L>z|d){I[p]=n,I[O]=m?(I[g]=I[m],I[m]=0):g?I[g]=0:0;L-=X(s>h|d?0:p,L
-N,h+1,I[G+1],J=q|A>1?0:p,s);if(!(h||s-1|B-O|i-n|p-b|L<-M))return W(),G--,u=J;
J=q-1|A<7||m||!s|d|r|o<z||X(0,0,0,21,0,0)>M;I[O]=o;I[p]=r;m?(I[m]=I[g],I[g]=0):
g?I[g]=9^y:0;}if(L>N||s>1&&L==N&&!h&&Math.random()<.5){I[G]=O;if(s>1){if(h&&c-L
<0)return y^=8,G--,L;if(!h)i=n,B=O,b=p;}N=L;}n+=J||(g=p,m=p<O?g-3:g+2,I[m]<z|I[
m+O-p]||I[p+=p-O])?1:0;}}}}while(!r&q>2||(p=O,q|A>2|o>z&!r&&++C*--A));}}}while(
++O>98?O=20:e-O);return y^=8,G--,N+M*M&&N>-K+1924|d?N:0;}B=i=y=u=0;while(B++<
120)I[B-1]=B%x?B/x%x<2|B%x<2?7:B/x&4?0:l[i++]|16:7;for(a=
"<table cellspacing=0 align=center>",i=18;i<100;a+=++i%10-9?
"<th width=60 height=60 onclick=Y("+i+") id=o"+i+
" style='line-height:50px;font-size:50px;border:2px solid #dde' bgcolor=#"+
(i*.9&1?"1ffe":"f0f")+"0f0>":(i++,"<tr>"));
a+="<th colspan=8><select id=t style='font-size:20px'><option>&#9819;<option>";
document.write(a+"&#9820;<option>&#9821;<option>&#9822;</select></table>");
function W(){B=b;for(p=21;p<99;++p)if(q=document.getElementById("o"+p)){q.
innerHTML="\xa0\u265f\u265a\u265e\u265d\u265c\u265b  \u2659\u2654\u2658\u2657\u2656\u2655".charAt(I[p]&z);
q.style.borderColor=p==B?"green":"#dde";}}W();
function Y(s){i=(I[s]^y)&z;if(i>8){b=s;W();}else if(B&&i<9){b=s;i=I[B]&z;if((i&
7)==1&(b<29|b>90))i=14-document.getElementById("t").selectedIndex^y;X(0,0,0,21,
u,1);if(y)setTimeout("X(0,0,0,21,u,3/*ply*/),X(0,0,0,21,u,1)",250);}}
</script>

import{a as h,u as S,t as f}from"./index.jlplx4ex.js";import{B as v}from"./Img.iuunu5c1.js";import{b as w}from"./Caret.hnvbzqgq.js";import{S as y}from"./Book.f6lktglp.js";import{S as C}from"./Profile.t9aiulue.js";import{v as a,o as i,c as b,a as e,C as c,t as r,G as k,j as I,k as l,b as d,Q as B,R as x,m as N,x as A,K as L,L as V}from"./runtime-dom.esm-bundler.h3clfjuw.js";import{_ as D}from"./_plugin-vue_export-helper.oebm7xum.js";const O={setup(){return{optionsStore:h(),rootStore:S()}},components:{BaseImg:v,CoreLoader:w,SvgBook:y,SvgDannieProfile:C},props:{card:String,description:{type:String,required:!0},image:String,loading:{type:Boolean,default:!1},title:{type:String,required:!0}},data(){return{canShowImage:!1}},computed:{appName(){return"All in One SEO"},getCard(){return this.card==="default"?this.optionsStore.options.social.twitter.general.defaultCardType:this.card}},methods:{maybeCanShow(o){this.canShowImage=o},truncate:f}},P=o=>(L("data-v-3ab503eb"),o=o(),V(),o),R={class:"aioseo-twitter-preview"},T={class:"twitter-post"},q={class:"twitter-header"},z={class:"profile-photo"},E={class:"poster"},j={class:"poster-name"},G=P(()=>e("div",{class:"poster-username"}," @aioseopack ",-1)),K={class:"twitter-content"},Q={class:"twitter-site-description"},U={class:"site-domain"},F={class:"site-title"},H={class:"site-description"};function J(o,M,t,m,n,s){const _=a("svg-dannie-profile"),u=a("svg-book"),p=a("core-loader"),g=a("base-img");return i(),b("div",R,[e("div",T,[e("div",q,[e("div",z,[c(_)]),e("div",E,[e("div",j,r(s.appName),1),G])]),e("div",{class:k(["twitter-container",t.image?s.getCard:"summary"])},[e("div",K,[e("div",{class:"twitter-image-preview",style:I({backgroundImage:s.getCard==="summary"&&n.canShowImage?`url('${t.image}')`:""})},[!t.loading&&(!t.image||!n.canShowImage)?(i(),l(u,{key:0})):d("",!0),t.loading?(i(),l(p,{key:1})):d("",!0),B(c(g,{src:t.image,debounce:!1,onCanShow:s.maybeCanShow},null,8,["src","onCanShow"]),[[x,s.getCard==="summary_large_image"&&n.canShowImage]])],4),e("div",Q,[e("div",U,[N(o.$slots,"site-url",{},()=>[A(r(m.rootStore.aioseo.urls.domain),1)],!0)]),e("div",F,r(s.truncate(t.title,70)),1),e("div",H,r(s.truncate(t.description,105)),1)])])],2)])])}const oe=D(O,[["render",J],["__scopeId","data-v-3ab503eb"]]);export{oe as C};

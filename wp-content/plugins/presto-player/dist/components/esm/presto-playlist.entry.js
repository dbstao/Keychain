import{r as registerInstance,h,g as getElement}from"./index-56b61ec5.js";const prestoPlaylistCss=":host{display:block;overflow:hidden}presto-player{opacity:0;visibility:hidden;transition:0.35s opacity, 0.35s visibility}presto-player.ready{opacity:1;visibility:visible}",PrestoPlaylistStyle0=prestoPlaylistCss,PrestoPlaylist=class{constructor(t){registerInstance(this,t),this.items=void 0,this.heading=void 0,this.listTextSingular=void 0,this.listTextPlural=void 0,this.transitionDuration=5,this.currentPlaylistItem=void 0,this.currentPlyr=void 0,this.playing=!1}rewatch(){this.handlePlay()}next(){this.handleNext()}handleCurrentPlay(t,i){var e;t&&(this.addOverlay(),this.currentPlyr.elements.container.getRootNode().host.style=this.currentPlaylistItem.config.styles,void 0!==i&&("youtube"===this.currentPlyr.provider&&!this.currentPlyr.muted&&(null===(e=this.currentPlyr)||void 0===e?void 0:e.embed)&&this.currentPlyr.embed.unMute(),this.currentPlyr.play()))}addOverlay(){var t,i;this.overlay=document.createElement("presto-playlist-overlay"),this.overlay.nextItemTitle=this.getNextItemTitle(),this.overlay.isLastItem=this.isLastItem(),this.overlay.nextItemString=(null==this?void 0:this.listTextSingular)||"Video",this.overlay.transitionDuration=this.transitionDuration,null===(i=null===(t=this.currentPlyr.elements)||void 0===t?void 0:t.container)||void 0===i||i.closest(".presto-player__wrapper").append(this.overlay)}componentWillLoad(){var t;this.currentPlaylistItem=(null===(t=null==this?void 0:this.items)||void 0===t?void 0:t[0])||null}handleItemClick(t){this.overlay&&(this.overlay.show=!1),this.el.style.height=this.el.offsetHeight+"px",this.el.style.width=this.el.offsetWidth+"px",this.currentPlaylistItem=t}handleNext(){this.overlay.show=!1,this.currentPlaylistItem=this.getNextItem()||this.currentPlaylistItem}handlePlay(){this.overlay&&(this.overlay.show=!1),this.currentPlyr.play()}handlePause(){this.overlay.show=!1,this.currentPlyr.pause()}getNextItem(){var t,i,e,l;if(this.isLastItem())return this.items[0];let s;for(let r=0;r<(null===(t=this.items)||void 0===t?void 0:t.length);r++)if((null===(i=this.items[r])||void 0===i?void 0:i.id)===(null===(e=this.currentPlaylistItem)||void 0===e?void 0:e.id)&&(null===(l=this.items)||void 0===l?void 0:l.length)!==r+1){s=this.items[r+1];break}return s}isLastItem(){var t,i,e;const l=(null===(t=this.items)||void 0===t?void 0:t.length)-1;return(null===(i=this.items[l])||void 0===i?void 0:i.id)===(null===(e=this.currentPlaylistItem)||void 0===e?void 0:e.id)}getNextItemTitle(){var t;const i=this.getNextItem();return void 0!==i?(null==i?void 0:i.title)||(null===(t=null==i?void 0:i.config)||void 0===t?void 0:t.title):""}render(){var t,i,e,l,s,r,n,o,a;if(!(null===(t=this.items)||void 0===t?void 0:t.length))return"";const d=this.listTextSingular?this.listTextSingular:"Video",u=this.listTextPlural?this.listTextPlural:"Videos";return h("presto-playlist-ui",null,(null===(i=this.currentPlaylistItem.config)||void 0===i?void 0:i.src)?h("presto-player",Object.assign({slot:"preview",src:null===(e=this.currentPlaylistItem.config)||void 0===e?void 0:e.src},this.currentPlaylistItem.config,{video_id:null===(l=this.currentPlaylistItem.config)||void 0===l?void 0:l.id,id:`presto-player-${null===(s=this.currentPlaylistItem.config)||void 0===s?void 0:s.id}`,"media-title":null===(r=this.currentPlaylistItem.config)||void 0===r?void 0:r.title,class:null===(n=this.currentPlaylistItem.config)||void 0===n?void 0:n.playerClass,key:null===(o=this.currentPlaylistItem.config)||void 0===o?void 0:o.id,provider:null===(a=this.currentPlaylistItem.config)||void 0===a?void 0:a.provider,onPlayerReady:t=>{this.currentPlyr=t.detail,this.el.style.height=null,this.el.style.width=null},onPlayedMedia:()=>this.playing=!0,onPausedMedia:()=>this.playing=!1,onEndedMedia:()=>this.overlay.show=!0})):h("slot",{name:"unauthorized",slot:"preview"}),h("div",{slot:"title"},this.heading||"Playlist"),h("div",{slot:"count"},this.items.length," ",this.items.length>1?u:d),this.items.map((t=>{var i,e,l,s;return h("presto-playlist-item",{slot:"list",onClick:()=>this.handleItemClick(t),active:(null===(i=this.currentPlaylistItem)||void 0===i?void 0:i.id)===(null==t?void 0:t.id),playing:(null===(e=this.currentPlaylistItem)||void 0===e?void 0:e.id)===(null==t?void 0:t.id)&&this.playing,class:(null===(l=this.currentPlaylistItem)||void 0===l?void 0:l.id)===(null==t?void 0:t.id)?"active":"",key:null==t?void 0:t.id,onTriggerPause:()=>this.handlePause(),onTriggerPlay:()=>this.handlePlay()},h("span",{slot:"item-title"},h("span",null,(null==t?void 0:t.title)||(null===(s=null==t?void 0:t.config)||void 0===s?void 0:s.title))),h("span",{slot:"item-duration"},h("span",null,null==t?void 0:t.duration)))})))}get el(){return getElement(this)}static get watchers(){return{currentPlyr:["handleCurrentPlay"]}}};PrestoPlaylist.style=PrestoPlaylistStyle0;export{PrestoPlaylist as presto_playlist};
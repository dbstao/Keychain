import{h}from"@stencil/core";export class ScMenuLabel{render(){return h("div",{part:"base",class:"menu-label"},h("slot",null))}static get is(){return"sc-menu-label"}static get encapsulation(){return"shadow"}static get originalStyleUrls(){return{$:["sc-menu-label.scss"]}}static get styleUrls(){return{$:["sc-menu-label.css"]}}}
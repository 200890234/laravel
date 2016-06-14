/**
 * @license Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {

config.skin = 'moono';//编辑器主题模板
config.extraPlugins = 'pbckcode,wenzgmap,page2images,qrc,dgfy,widget,lineutils,dialog,clipboard,mathjax';
config.mathJaxClass = 'my-math';
config.mathJaxLib = 'http:\/\/cdn.mathjax.org\/mathjax\/latest\/MathJax.js?config=TeX-AMS-MML_HTMLorMML';
config.pbckcode = {
    modes: [["C#", "csharp"], ["C/C++", "c_cpp"], ["HTML", "html"], ["CSS", "css"], ["XML", "xml"], ["SQL", "sql"], ["JavaScript", "javascript"], ["Java", "java"], ['PHP', 'php']],
    cls: 'code'
};
//config.removePlugins = 'elementspath,save,font';
	config.toolbarCanCollapse = true;//是否可伸缩
	config.toolbarLocation = 'top';//可选：bottom
	config.toolbarStartupExpanded = true; //工具栏默认是否展开
	config.resize_enabled = true;// 取消“拖拽以改变尺寸”功能plugins/resize/plugin.js
	config.height = 460;//高度
	config.language = 'zh-cn';//语言
	//config.plugins ='font,pagebreak,panelbutton,colorbutton,preview'; 
};

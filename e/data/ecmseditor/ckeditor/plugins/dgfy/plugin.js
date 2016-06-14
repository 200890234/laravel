//Google QR-Code generator plugin by zmmaj from zmajsoft-team
//blah... version 1.1.
//problems? write to zmajsoft@zmajsoft.com

CKEDITOR.plugins.add( 'dgfy',
{
	init: function( editor )
	{
		editor.addCommand( 'dgfy', new CKEDITOR.dialogCommand( 'dgfy' ) );
		editor.ui.addButton( 'dgfy',
		{
			label: '�۹���ҳ��ǩ',
			command: 'dgfy',
			icon: this.path + 'images/dgfy.png'
		} );
 
		CKEDITOR.dialog.add( 'dgfy', function( editor )
		{
			return {
				title : 'diguocms',
				minWidth : 200,
				minHeight : 16,
				contents :
				[
					{
						id : 'dgfy_general',
						label : 'dgfy Settings',
						elements :
						[
							{
								type : 'html',
								html : '�۹���ҳ��ǩ[!--empirenews.page--]'
							}
						]
					}
				],
				onOk : function()
				{
			var dialog = this,
					data = {},
					link = editor.document.createElement( 'a' );
					this.commitContent( data );
					editor.insertHtml('[!--empirenews.page--]');
				}
			};
		} );
	}
} );
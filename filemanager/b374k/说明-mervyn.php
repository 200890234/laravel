b374k.php是通过访问index.php页面生成的(点击run按钮可以预览生成的效果)。 文件名，组件，皮肤等可以自定义。
theme目录下新建了mervyn.css来自定义样式，修改base目录下的文件调整功能和html界面。
为了安全，生成完毕后需要把除了该文件以外的其他所有文件删除。 我把它打包了一个压缩文件b374k-generator.rar。

b374k-generator-main.rar是改了main.php和index.php涉及到htmlspecialchars的函数以后的utf8版本copy

以下修改是基于处理中文的新copy-> b374k-generator-gbk.rar:
修改了base/main.php文件下的html_safe()函数210行，他影响了中文文件名字符的显示.
把所有相关文件的编码改成了gbk，
	打包了一份b374k-generator-gbk.rar.
	这样就可以正常显示中文名了；
	涉及到中文字符的其他操作好像还不行？？？下载 重命名 修改等
	通过webshell可以新建中文名的文件并修改，在文件夹找的这这些文件是乱码；
	文件夹下正常显示的中文文件，在webshell查看是乱码；

https://github.com/b374k/b374k

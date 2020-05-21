## 用户登陆状态
保存用户是否登陆及各种登陆后的数据
用户名，权限，头像，...
但保存了权限不代表无需验证即可进行需要权限的操作。

## 链接表
保存功能名和对应路径。
程序中的路径必须从这里取得。
`
{
	index:'/',
	myScore:'/myScore',
	manageTest:'/manageTest',
	download:'/download',
	bbs:'/bbs',
	onlineTest:'/onlineTest',
	editTest:'/editTest',
	about:'/about'
}
`

# 优雅草科技官方网站

> 2026 年 2 月 17 日（农历大年初一），优雅草科技正式启用最新版官网。本仓库为官网源码，**欢迎下载、学习与合规使用**。
>
> 当前版本：**v2.0.1**

---

## 重要日期

- **2026 年 2 月 17 日**（农历丙午年正月初一）：优雅草科技全面启用**最新版本官方网站**，并同步推进全系列产品开源与商业授权体系。  
- 即日起，官网与开源产品均以本仓库及 [优雅草开源组织](https://gitee.com/youyacao) 为统一入口，欢迎开发者与创作者使用、反馈与共建。

---

## 项目简介

本仓库为**成都市一颗优雅草科技有限公司**（优雅草科技）的官方网站前端源码，采用**纯静态**技术栈（HTML + CSS + JavaScript），便于部署、修改与二次使用。官网历经多年迭代，涵盖公司介绍、自营产品、自研开源产品、开发服务、集团成员企业等完整板块。

### 技术栈与特点

- **纯静态**：无后端依赖，可直接部署至任意静态托管或 CDN。
- **Tailwind CSS**：使用 Tailwind 构建响应式与主题样式，支持明暗主题切换。
- **现代前端**：玻璃拟态（Glassmorphism）、渐变、动效与无障碍考虑。
- **多端适配**：桌面与移动端友好，含移动端导航与触控优化。

### 官网主要内容结构

| 板块       | 说明 |
|------------|------|
| 关于我们   | 公司简介、2026 战略规划、拥抱科技与四大创作领域（音乐、游戏、文学、漫画） |
| 集团成员企业 | 关联企业与业务布局 |
| 自营产品   | Flutter / UniApp / 大屏 / 区块链 / 行业定制等开发服务与产品入口 |
| 自研开源产品 | 优雅草全系列开源产品展示与跳转 |
| 外包与合作政策 | 2026 年起：仅接受定制化开发（高精尖客户）、全面开源 + 商业授权、技术方向合作与战略合营 |
| 发展历程 | 按年份 Tab 切换展示公司 2015 年至今的重要节点，支持返回首页导航 |

业务与授权相关说明以官网及 [正版授权查询站 zhengban.youyacao.com](https://zhengban.youyacao.com) 为准。

### 发展历程页（licheng）

- 按年份 Tab 切换查看不同年份里程碑
- 时间线左右交替展示（direction-l / direction-r）
- 顶部导航与首页一致，可快速返回官网或跳转各板块

### 截图（新版官网）

以下为新版官网界面截图，仅供参考。

![](https://doc.youyacao.com/server/index.php?s=/api/attachment/visitFile&sign=420aa729af354b5e5a3034bc157c9a16)

![](https://doc.youyacao.com/server/index.php?s=/api/attachment/visitFile&sign=5c0a463976a2b20d739c504787d20539)

![](https://doc.youyacao.com/server/index.php?s=/api/attachment/visitFile&sign=0dd3e4eedc32c9f5bdd5e3d41b4738cb)

![](https://doc.youyacao.com/server/index.php?s=/api/attachment/visitFile&sign=4c17b728690fd6be357488bbcb7b57d3)

---

## 仓库结构概览

```
├── index.html          # 官网首页（最新版）
├── yindao.html         # 引导/落地页
├── kaifa/              # 开发服务相关子页
│   ├── index.html      # 开发服务首页
│   ├── app/            # APP 开发
│   ├── flutter/        # Flutter 开发
│   ├── uniapp/         # UniApp 开发
│   ├── daping/         # 大屏开发
│   ├── Blockchain/     # 区块链开发
│   ├── Industry/       # 行业方案
│   ├── custom/         # 定制开发
│   └── danmu/          # 弹幕等
├── tool/               # 小工具与演示
├── licheng/            # 发展历程（按年份 Tab 展示）
├── images/             # 图片资源
├── css/、js/           # 全局样式与脚本
├── README.md           # 本说明（中文）
├── README.en.md        # 英文说明
└── LICENSE             # 优雅草 2026 开源与授权协议
```

具体页面与资源以实际目录为准，可克隆后本地查看。

---

## 如何使用

1. **克隆或下载**
   ```bash
   git clone https://gitee.com/youyacao/www.youyacao.com.git
   cd www.youyacao.com
   ```
2. **本地预览**  
   用浏览器直接打开 `index.html`，或使用任意本地静态服务（如 `npx serve .`、VS Code Live Server 等）。发展历程页为 `licheng/index.html`。
3. **部署**  
   将整个目录上传至支持静态托管的服务器或对象存储（如 Nginx、OSS、Vercel、GitHub Pages 等），将根目录或 `index.html` 设为首页即可。静态部署无需后端，配置简单。
4. **修改与二次使用**  
   可在遵守 [LICENSE](LICENSE) 的前提下修改文案、样式、结构；商业使用须取得授权，详见 LICENSE 及 [zhengban.youyacao.com](https://zhengban.youyacao.com)。

---

## 开源与授权说明

- 本官网源码在**个人非商业用途**下可免费使用；**企业或个人的商业用途**须获得优雅草商业授权。
- 授权查询与验证的**唯一官方网站**：[**zhengban.youyacao.com**](https://zhengban.youyacao.com)。
- 完整条款见仓库根目录 [**LICENSE**](LICENSE) 文件（优雅草 2026 年 2 月 17 日发布的开源与授权协议最新版）。

---

## 相关链接

| 名称         | 链接 |
|--------------|------|
| 官网         | https://www.youyacao.com |
| 正版授权查询 | https://zhengban.youyacao.com |
| 优雅草 Gitee | https://gitee.com/youyacao |
| 技术社区     | https://bbs.youyacao.com |
| 文档与更新   | https://doc.youyacao.com |

---

## 版本与更新

- **v2.0.1**：发展历程页左右交替布局、顶部导航与首页一致、README 完善
- 后续版本更新请关注本仓库 Release 或 [doc.youyacao.com](https://doc.youyacao.com)

## 致谢与欢迎

感谢您关注并使用优雅草科技官网与开源产品。  
**2026 年 2 月 17 日，我们正式以最新版官网与大家见面，欢迎使用、反馈与共建。**

---

*成都市一颗优雅草科技有限公司 · 优雅草科技*

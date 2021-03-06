USE [RuedaNegocio_db]
GO
EXEC sys.sp_dropextendedproperty @name=N'MS_Description' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'RUEDA_NEGOCIO', @level2type=N'COLUMN',@level2name=N'estado'

GO
EXEC sys.sp_dropextendedproperty @name=N'MS_Description' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'REUNION', @level2type=N'COLUMN',@level2name=N'id_tipo_zona'

GO
EXEC sys.sp_dropextendedproperty @name=N'MS_Description' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'PERSONA', @level2type=N'COLUMN',@level2name=N'estado'

GO
ALTER TABLE [dbo].[RUEDA_NEGOCIO] DROP CONSTRAINT [FK_RUEDA_NEGOCIO_EMPRESA]
GO
ALTER TABLE [dbo].[REUNION] DROP CONSTRAINT [FK_REUNION_RUEDA_NEGOCIO]
GO
ALTER TABLE [dbo].[PAGO] DROP CONSTRAINT [FK_PAGO_RUEDA_NEGOCIO]
GO
ALTER TABLE [dbo].[PAGO] DROP CONSTRAINT [FK_PAGO_MOTIVO_PAGO]
GO
ALTER TABLE [dbo].[EMPRESA] DROP CONSTRAINT [FK_EMPRESA_UBIGEO]
GO
ALTER TABLE [dbo].[EMPRESA] DROP CONSTRAINT [FK_EMPRESA_RUBRO]
GO
ALTER TABLE [dbo].[EMPRESA] DROP CONSTRAINT [FK_EMPRESA_PERSONA]
GO
ALTER TABLE [dbo].[EMPRESA] DROP CONSTRAINT [DF_EMPRESA_imagenlogo]
GO
/****** Object:  Table [dbo].[UBIGEO]    Script Date: 26/02/2015 06:25:14 p.m. ******/
DROP TABLE [dbo].[UBIGEO]
GO
/****** Object:  Table [dbo].[RUEDA_NEGOCIO]    Script Date: 26/02/2015 06:25:14 p.m. ******/
DROP TABLE [dbo].[RUEDA_NEGOCIO]
GO
/****** Object:  Table [dbo].[RUBRO]    Script Date: 26/02/2015 06:25:14 p.m. ******/
DROP TABLE [dbo].[RUBRO]
GO
/****** Object:  Table [dbo].[REUNION]    Script Date: 26/02/2015 06:25:14 p.m. ******/
DROP TABLE [dbo].[REUNION]
GO
/****** Object:  Table [dbo].[PERSONA]    Script Date: 26/02/2015 06:25:14 p.m. ******/
DROP TABLE [dbo].[PERSONA]
GO
/****** Object:  Table [dbo].[PAGO]    Script Date: 26/02/2015 06:25:14 p.m. ******/
DROP TABLE [dbo].[PAGO]
GO
/****** Object:  Table [dbo].[MOTIVO_PAGO]    Script Date: 26/02/2015 06:25:14 p.m. ******/
DROP TABLE [dbo].[MOTIVO_PAGO]
GO
/****** Object:  Table [dbo].[FORMA_PAGO]    Script Date: 26/02/2015 06:25:14 p.m. ******/
DROP TABLE [dbo].[FORMA_PAGO]
GO
/****** Object:  Table [dbo].[EMPRESA]    Script Date: 26/02/2015 06:25:14 p.m. ******/
DROP TABLE [dbo].[EMPRESA]
GO
/****** Object:  Table [dbo].[CONTACTO]    Script Date: 26/02/2015 06:25:14 p.m. ******/
DROP TABLE [dbo].[CONTACTO]
GO
/****** Object:  StoredProcedure [dbo].[sp_valid_person_url]    Script Date: 26/02/2015 06:25:14 p.m. ******/
DROP PROCEDURE [dbo].[sp_valid_person_url]
GO
/****** Object:  StoredProcedure [dbo].[sp_valid_person_url]    Script Date: 26/02/2015 06:25:14 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[sp_valid_person_url]
@mdvalue varchar(250)
AS

    SELECT email,id_persona FROM PERSONA WHERE SUBSTRING(sys.fn_sqlvarbasetostr(HASHBYTES('MD5',cast(id_persona as varchar))),3,32) = @mdvalue;

GO
/****** Object:  Table [dbo].[CONTACTO]    Script Date: 26/02/2015 06:25:14 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[CONTACTO](
	[id_contacto] [int] NOT NULL,
 CONSTRAINT [PK_CONTACTO] PRIMARY KEY CLUSTERED 
(
	[id_contacto] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[EMPRESA]    Script Date: 26/02/2015 06:25:14 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[EMPRESA](
	[id_empresa] [int] IDENTITY(1,1) NOT NULL,
	[rut] [varchar](20) NOT NULL,
	[razon_social] [varchar](60) NOT NULL,
	[nombre_fantasia] [varchar](40) NOT NULL,
	[direccion_legal] [varchar](120) NOT NULL,
	[telefono] [varchar](15) NULL,
	[website] [varchar](100) NULL,
	[redsocial] [varchar](80) NULL,
	[email] [varchar](22) NULL,
	[imagenlogo] [varchar](100) NULL,
	[direc_activ_comercial] [varchar](120) NULL,
	[giro_comercial] [varchar](80) NOT NULL,
	[perfil_empresa] [varchar](200) NOT NULL,
	[id_ubigeo] [int] NOT NULL,
	[id_rubro] [int] NOT NULL,
	[id_persona] [int] NOT NULL,
 CONSTRAINT [PK_EMPRESA] PRIMARY KEY CLUSTERED 
(
	[id_empresa] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[FORMA_PAGO]    Script Date: 26/02/2015 06:25:14 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[FORMA_PAGO](
	[id_form_pago] [int] IDENTITY(1,1) NOT NULL,
	[descripcion] [varchar](50) NULL,
 CONSTRAINT [PK_FORMA_PAGO] PRIMARY KEY CLUSTERED 
(
	[id_form_pago] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[MOTIVO_PAGO]    Script Date: 26/02/2015 06:25:14 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[MOTIVO_PAGO](
	[id_motivo_pago] [int] IDENTITY(1,1) NOT NULL,
	[nombre_pago] [varchar](100) NULL,
 CONSTRAINT [PK_MOTIVO] PRIMARY KEY CLUSTERED 
(
	[id_motivo_pago] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[PAGO]    Script Date: 26/02/2015 06:25:14 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[PAGO](
	[id_pago] [int] IDENTITY(1,1) NOT NULL,
	[fecha_pago] [datetime] NOT NULL,
	[id_motivo_pago] [int] NOT NULL,
	[id_rueda_negocio] [int] NOT NULL,
	[codigo_operacion] [varchar](100) NOT NULL,
	[monto] [decimal](18, 0) NOT NULL,
	[comentario] [varchar](100) NOT NULL,
 CONSTRAINT [PK_PAGOS] PRIMARY KEY CLUSTERED 
(
	[id_pago] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[PERSONA]    Script Date: 26/02/2015 06:25:14 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[PERSONA](
	[id_persona] [int] IDENTITY(1,1) NOT NULL,
	[nombres] [varchar](40) NOT NULL,
	[nro_doc_identidad] [varchar](50) NULL,
	[email] [varchar](22) NOT NULL,
	[password] [varchar](200) NOT NULL,
	[telefono] [varchar](10) NULL,
	[celular] [varchar](10) NULL,
	[estado] [int] NOT NULL,
	[fecha_reg] [datetime] NULL,
	[interes] [varchar](150) NULL,
	[lugar_trabajo] [varchar](100) NULL,
	[cargo] [varchar](30) NULL,
	[id_empresa] [int] NULL,
 CONSTRAINT [PK_REPRESENTANTE] PRIMARY KEY CLUSTERED 
(
	[id_persona] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[REUNION]    Script Date: 26/02/2015 06:25:14 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[REUNION](
	[id_reunion] [int] IDENTITY(1,1) NOT NULL,
	[id_tipo_zona] [int] NULL,
	[nombre_ubicacion] [varchar](80) NOT NULL,
	[capacidad] [int] NULL,
	[nombre_tema] [varchar](100) NOT NULL,
	[expocitores] [varchar](100) NULL,
	[estudio_especializacion] [varchar](100) NULL,
	[fecha_reunion] [date] NOT NULL,
	[hora_inicio] [varchar](20) NULL,
	[hora_final] [varchar](20) NULL,
	[fecha_reg] [datetime] NOT NULL,
	[id_rueda_negocio] [int] NOT NULL,
 CONSTRAINT [PK_REUNION] PRIMARY KEY CLUSTERED 
(
	[id_reunion] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[RUBRO]    Script Date: 26/02/2015 06:25:14 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[RUBRO](
	[id_rubro] [int] IDENTITY(1,1) NOT NULL,
	[nombre_rubro] [varchar](80) NULL,
 CONSTRAINT [PK_RUBRO] PRIMARY KEY CLUSTERED 
(
	[id_rubro] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[RUEDA_NEGOCIO]    Script Date: 26/02/2015 06:25:14 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[RUEDA_NEGOCIO](
	[id_rueda_negocio] [int] IDENTITY(1,1) NOT NULL,
	[nombre_evento] [varchar](100) NOT NULL,
	[comentario] [varchar](150) NULL,
	[direccion] [varchar](100) NOT NULL,
	[imagen_logo] [varchar](100) NULL,
	[fecha_inicio] [date] NOT NULL,
	[fecha_fin] [date] NULL,
	[hora_inicio] [varchar](30) NULL,
	[fecha_reg] [datetime] NOT NULL,
	[costo] [nchar](10) NOT NULL,
	[estado] [int] NOT NULL,
	[id_empresa] [int] NOT NULL,
 CONSTRAINT [PK_RUEDA_NEGOCIO] PRIMARY KEY CLUSTERED 
(
	[id_rueda_negocio] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[UBIGEO]    Script Date: 26/02/2015 06:25:14 p.m. ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[UBIGEO](
	[id_ubigeo] [int] IDENTITY(1,1) NOT NULL,
	[CodRegion] [varchar](3) NULL,
	[CodProvincia] [varchar](3) NULL,
	[CodComuna] [varchar](3) NULL,
	[nombre] [varchar](70) NULL,
 CONSTRAINT [PK_UBIGEO] PRIMARY KEY CLUSTERED 
(
	[id_ubigeo] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
SET IDENTITY_INSERT [dbo].[EMPRESA] ON 

INSERT [dbo].[EMPRESA] ([id_empresa], [rut], [razon_social], [nombre_fantasia], [direccion_legal], [telefono], [website], [redsocial], [email], [imagenlogo], [direc_activ_comercial], [giro_comercial], [perfil_empresa], [id_ubigeo], [id_rubro], [id_persona]) VALUES (9, N'9875444444', N'Graña & Montero', N'Graña', N'av. peru', N'5441710', N'www.google.com', N'facebook', N'jngb2013@gmail.com', N'0', N'jr.  cusco', N'Venta de maquinarias', N'esto es guerra', 2, 2, 79)
INSERT [dbo].[EMPRESA] ([id_empresa], [rut], [razon_social], [nombre_fantasia], [direccion_legal], [telefono], [website], [redsocial], [email], [imagenlogo], [direc_activ_comercial], [giro_comercial], [perfil_empresa], [id_ubigeo], [id_rubro], [id_persona]) VALUES (10, N'9875774444', N'jamsa', N'jamsa', N'jr. puno', N'544717', N'544717', N'faceboo', N'jngb2013@gmail.com', N'0', N'av. ricardo palma', N'fff', N'ffff', 1, 2, 79)
INSERT [dbo].[EMPRESA] ([id_empresa], [rut], [razon_social], [nombre_fantasia], [direccion_legal], [telefono], [website], [redsocial], [email], [imagenlogo], [direc_activ_comercial], [giro_comercial], [perfil_empresa], [id_ubigeo], [id_rubro], [id_persona]) VALUES (11, N'896544444441', N'INTICO S.A.C', N'INTICO PERÚ', N'JR. BENVIDES', N'5441710', N'996822962', N'facebookinti', N'', N'0', N'informatica', N'', N'empresa de informatica', 1, 2, 79)
INSERT [dbo].[EMPRESA] ([id_empresa], [rut], [razon_social], [nombre_fantasia], [direccion_legal], [telefono], [website], [redsocial], [email], [imagenlogo], [direc_activ_comercial], [giro_comercial], [perfil_empresa], [id_ubigeo], [id_rubro], [id_persona]) VALUES (12, N'963258744111', N'Textiles NAZCA', N'Textiles NAZCA', N'av. peru', N'5441710', N'www.NAZCA.com', N'facebook NAZCA', N'', N'0', N'av. peru', N'eeeee', N'ddddddddddd', 2, 2, 80)
INSERT [dbo].[EMPRESA] ([id_empresa], [rut], [razon_social], [nombre_fantasia], [direccion_legal], [telefono], [website], [redsocial], [email], [imagenlogo], [direc_activ_comercial], [giro_comercial], [perfil_empresa], [id_ubigeo], [id_rubro], [id_persona]) VALUES (16, N'10405366998', N'CAVASSA S.A.C', N'CAVASSA', N'JR. LETICIA', N'5441710', N'988730522', N'FACEBOOK CABASA', N'FACE CAVASSA', N'0', N'JR. SAENS PEÑA 546', N'PASAGES', N'MI PERFIL', 1, 2, 79)
INSERT [dbo].[EMPRESA] ([id_empresa], [rut], [razon_social], [nombre_fantasia], [direccion_legal], [telefono], [website], [redsocial], [email], [imagenlogo], [direc_activ_comercial], [giro_comercial], [perfil_empresa], [id_ubigeo], [id_rubro], [id_persona]) VALUES (17, N'104022357998', N'armonia s.a.c', N'armonia s.a.c', N'jr. leticia', N'5441710', N'988730522', N'facebook armonia', N'www.armonia.com', N'0', N'jr. leticia', N'trasnport', N'mi perfil', 2, 2, 79)
SET IDENTITY_INSERT [dbo].[EMPRESA] OFF
SET IDENTITY_INSERT [dbo].[FORMA_PAGO] ON 

INSERT [dbo].[FORMA_PAGO] ([id_form_pago], [descripcion]) VALUES (1, N'UN SOLO PAGO')
INSERT [dbo].[FORMA_PAGO] ([id_form_pago], [descripcion]) VALUES (2, N'X TEMA/ REUNION')
SET IDENTITY_INSERT [dbo].[FORMA_PAGO] OFF
SET IDENTITY_INSERT [dbo].[MOTIVO_PAGO] ON 

INSERT [dbo].[MOTIVO_PAGO] ([id_motivo_pago], [nombre_pago]) VALUES (1, N'CREACIÓN DE EVENTOS')
INSERT [dbo].[MOTIVO_PAGO] ([id_motivo_pago], [nombre_pago]) VALUES (2, N'INSCRIPCIÓN A EVENTOS')
SET IDENTITY_INSERT [dbo].[MOTIVO_PAGO] OFF
SET IDENTITY_INSERT [dbo].[PAGO] ON 

INSERT [dbo].[PAGO] ([id_pago], [fecha_pago], [id_motivo_pago], [id_rueda_negocio], [codigo_operacion], [monto], [comentario]) VALUES (4, CAST(0x0000A44A010951E0 AS DateTime), 1, 1, N'667777', CAST(15 AS Decimal(18, 0)), N'mi pago')
INSERT [dbo].[PAGO] ([id_pago], [fecha_pago], [id_motivo_pago], [id_rueda_negocio], [codigo_operacion], [monto], [comentario]) VALUES (5, CAST(0x0000A44A0109DE80 AS DateTime), 1, 5, N'966555444', CAST(123 AS Decimal(18, 0)), N'el pago se iso por targetasssss')
SET IDENTITY_INSERT [dbo].[PAGO] OFF
SET IDENTITY_INSERT [dbo].[PERSONA] ON 

INSERT [dbo].[PERSONA] ([id_persona], [nombres], [nro_doc_identidad], [email], [password], [telefono], [celular], [estado], [fecha_reg], [interes], [lugar_trabajo], [cargo], [id_empresa]) VALUES (79, N'Roger Arellano Suarez', N'40535799', N'jngb2013@gmail.com', N'123', N'988730522', N'988730522', 1, CAST(0x0000A44500CC5880 AS DateTime), NULL, N'ddd', N'admin', NULL)
INSERT [dbo].[PERSONA] ([id_persona], [nombres], [nro_doc_identidad], [email], [password], [telefono], [celular], [estado], [fecha_reg], [interes], [lugar_trabajo], [cargo], [id_empresa]) VALUES (80, N'Ramiro priale', N'40535799', N'jbarja@intico.com.pe', N'1234', N'5441710', N'988730522', 1, CAST(0x0000A4450121C3B0 AS DateTime), NULL, N'comas', N'comas', NULL)
INSERT [dbo].[PERSONA] ([id_persona], [nombres], [nro_doc_identidad], [email], [password], [telefono], [celular], [estado], [fecha_reg], [interes], [lugar_trabajo], [cargo], [id_empresa]) VALUES (81, N'frank', NULL, N'fpinedo@intico.com.pe', N'basura123', NULL, NULL, 1, CAST(0x0000A445013470F0 AS DateTime), NULL, NULL, NULL, NULL)
SET IDENTITY_INSERT [dbo].[PERSONA] OFF
SET IDENTITY_INSERT [dbo].[REUNION] ON 

INSERT [dbo].[REUNION] ([id_reunion], [id_tipo_zona], [nombre_ubicacion], [capacidad], [nombre_tema], [expocitores], [estudio_especializacion], [fecha_reunion], [hora_inicio], [hora_final], [fecha_reg], [id_rueda_negocio]) VALUES (1, NULL, N'Meza 1', 10, N'Mineria y Derivados', N'jorge  torrez', N'Licenciado', CAST(0xBC390B00 AS Date), N'1:00 pm', N'5:00pm', CAST(0x0000A44800000000 AS DateTime), 5)
INSERT [dbo].[REUNION] ([id_reunion], [id_tipo_zona], [nombre_ubicacion], [capacidad], [nombre_tema], [expocitores], [estudio_especializacion], [fecha_reunion], [hora_inicio], [hora_final], [fecha_reg], [id_rueda_negocio]) VALUES (4, 2, N'0', 4, N'Rueda 1', N'Jose Luna', N'su maestria', CAST(0xDC290B00 AS Date), N'2:23', N'5:25', CAST(0x0000A44900F42BD0 AS DateTime), 5)
INSERT [dbo].[REUNION] ([id_reunion], [id_tipo_zona], [nombre_ubicacion], [capacidad], [nombre_tema], [expocitores], [estudio_especializacion], [fecha_reunion], [hora_inicio], [hora_final], [fecha_reg], [id_rueda_negocio]) VALUES (5, 1, N'MESA 3', 6, N'mesa nro. 5', N'JORGE LUJAN', N'ES MI ESPECIALIZACION', CAST(0xEE2A0B00 AS Date), N'2:35', N'6:28', CAST(0x0000A44900F4B870 AS DateTime), 5)
INSERT [dbo].[REUNION] ([id_reunion], [id_tipo_zona], [nombre_ubicacion], [capacidad], [nombre_tema], [expocitores], [estudio_especializacion], [fecha_reunion], [hora_inicio], [hora_final], [fecha_reg], [id_rueda_negocio]) VALUES (6, 3, N'sala 3', 4, N'Temas de actualidad', N'Ruiz  peña', N'maestria en gestión', CAST(0x9F3A0B00 AS Date), N'5:00', N'6:00', CAST(0x0000A44900F84A80 AS DateTime), 5)
INSERT [dbo].[REUNION] ([id_reunion], [id_tipo_zona], [nombre_ubicacion], [capacidad], [nombre_tema], [expocitores], [estudio_especializacion], [fecha_reunion], [hora_inicio], [hora_final], [fecha_reg], [id_rueda_negocio]) VALUES (12, 1, N'Nombre zona', 23, N'qqqqqqqqqq', N'aaaa', N'ccc', CAST(0xBA390B00 AS Date), N'8', N'9', CAST(0x0000A44B0101A120 AS DateTime), 5)
INSERT [dbo].[REUNION] ([id_reunion], [id_tipo_zona], [nombre_ubicacion], [capacidad], [nombre_tema], [expocitores], [estudio_especializacion], [fecha_reunion], [hora_inicio], [hora_final], [fecha_reg], [id_rueda_negocio]) VALUES (13, 1, N'mesa 3', 3, N'Expocicion de metales pesados', N'royer guzman', N'', CAST(0xB3390B00 AS Date), N'3', N'5', CAST(0x0000A44B010419F0 AS DateTime), 8)
INSERT [dbo].[REUNION] ([id_reunion], [id_tipo_zona], [nombre_ubicacion], [capacidad], [nombre_tema], [expocitores], [estudio_especializacion], [fecha_reunion], [hora_inicio], [hora_final], [fecha_reg], [id_rueda_negocio]) VALUES (14, 2, N'zina b 4to piso', 20, N'Temas de agua  pesada', N'Jose luna', N'maesria ingenieria nuclear', CAST(0xBA390B00 AS Date), N'5', N'8', CAST(0x0000A44B010FE960 AS DateTime), 8)
SET IDENTITY_INSERT [dbo].[REUNION] OFF
SET IDENTITY_INSERT [dbo].[RUBRO] ON 

INSERT [dbo].[RUBRO] ([id_rubro], [nombre_rubro]) VALUES (1, N'Fabricación')
INSERT [dbo].[RUBRO] ([id_rubro], [nombre_rubro]) VALUES (2, N'Educación')
INSERT [dbo].[RUBRO] ([id_rubro], [nombre_rubro]) VALUES (3, N'Industria y Medicina')
SET IDENTITY_INSERT [dbo].[RUBRO] OFF
SET IDENTITY_INSERT [dbo].[RUEDA_NEGOCIO] ON 

INSERT [dbo].[RUEDA_NEGOCIO] ([id_rueda_negocio], [nombre_evento], [comentario], [direccion], [imagen_logo], [fecha_inicio], [fecha_fin], [hora_inicio], [fecha_reg], [costo], [estado], [id_empresa]) VALUES (1, N'Exposición de petroleo', N'Estoes un gran evento', N'jr. puno 456', NULL, CAST(0xBE390B00 AS Date), CAST(0xBE390B00 AS Date), N'9:00 am', CAST(0x0000A44500000000 AS DateTime), N'100       ', 0, 9)
INSERT [dbo].[RUEDA_NEGOCIO] ([id_rueda_negocio], [nombre_evento], [comentario], [direccion], [imagen_logo], [fecha_inicio], [fecha_fin], [hora_inicio], [fecha_reg], [costo], [estado], [id_empresa]) VALUES (5, N'Gran Exposición Mineria', N'Datos d prueba', N'.r. mayras 2456', NULL, CAST(0xB7390B00 AS Date), CAST(0xC1390B00 AS Date), N'11:00 am', CAST(0x0000A44500000000 AS DateTime), N'150       ', 1, 10)
INSERT [dbo].[RUEDA_NEGOCIO] ([id_rueda_negocio], [nombre_evento], [comentario], [direccion], [imagen_logo], [fecha_inicio], [fecha_fin], [hora_inicio], [fecha_reg], [costo], [estado], [id_empresa]) VALUES (8, N'feria de tortas industriales', N'esto es mi comentario', N'jr. paita', N'0', CAST(0xBE390B00 AS Date), CAST(0xC1390B00 AS Date), N'9:00 am', CAST(0x0000A445011E31A0 AS DateTime), N'600       ', 1, 11)
INSERT [dbo].[RUEDA_NEGOCIO] ([id_rueda_negocio], [nombre_evento], [comentario], [direccion], [imagen_logo], [fecha_inicio], [fecha_fin], [hora_inicio], [fecha_reg], [costo], [estado], [id_empresa]) VALUES (9, N'Evento feria de Artesania', N'detalle Evento feria de Artesania', N'jr. viru 145', N'0', CAST(0xBE390B00 AS Date), CAST(0xC1390B00 AS Date), N'9:00 am', CAST(0x0000A445013357B0 AS DateTime), N'50        ', 0, 12)
INSERT [dbo].[RUEDA_NEGOCIO] ([id_rueda_negocio], [nombre_evento], [comentario], [direccion], [imagen_logo], [fecha_inicio], [fecha_fin], [hora_inicio], [fecha_reg], [costo], [estado], [id_empresa]) VALUES (10, N'Evento de bebidas', N'detalle evento', N'jr. quilca', N'0', CAST(0xBE390B00 AS Date), CAST(0xC1390B00 AS Date), N'9:00 am', CAST(0x0000A4450133E450 AS DateTime), N'30        ', 1, 12)
INSERT [dbo].[RUEDA_NEGOCIO] ([id_rueda_negocio], [nombre_evento], [comentario], [direccion], [imagen_logo], [fecha_inicio], [fecha_fin], [hora_inicio], [fecha_reg], [costo], [estado], [id_empresa]) VALUES (15, N'Evento Feria electrodomesticos', N'detalle de evento', N'jr. caman #146', N'0', CAST(0xAA390B00 AS Date), CAST(0xB4390B00 AS Date), N'3:00 pm', CAST(0x0000A449010838A0 AS DateTime), N'10        ', 0, 10)
INSERT [dbo].[RUEDA_NEGOCIO] ([id_rueda_negocio], [nombre_evento], [comentario], [direccion], [imagen_logo], [fecha_inicio], [fecha_fin], [hora_inicio], [fecha_reg], [costo], [estado], [id_empresa]) VALUES (16, N'gggggg', N'ddasdads', N'ffdsfdsdsf', N'0', CAST(0x8E390B00 AS Date), CAST(0xA6390B00 AS Date), N'9:00 am', CAST(0x0000A44B00EEF3E0 AS DateTime), N'20        ', 0, 10)
INSERT [dbo].[RUEDA_NEGOCIO] ([id_rueda_negocio], [nombre_evento], [comentario], [direccion], [imagen_logo], [fecha_inicio], [fecha_fin], [hora_inicio], [fecha_reg], [costo], [estado], [id_empresa]) VALUES (17, N'cava', N'cava', N'cava', N'0', CAST(0xAA390B00 AS Date), CAST(0xAE390B00 AS Date), N'9:00 am', CAST(0x0000A44B00EF3A30 AS DateTime), N'123       ', 0, 16)
SET IDENTITY_INSERT [dbo].[RUEDA_NEGOCIO] OFF
SET IDENTITY_INSERT [dbo].[UBIGEO] ON 

INSERT [dbo].[UBIGEO] ([id_ubigeo], [CodRegion], [CodProvincia], [CodComuna], [nombre]) VALUES (1, N'Ari', NULL, NULL, NULL)
INSERT [dbo].[UBIGEO] ([id_ubigeo], [CodRegion], [CodProvincia], [CodComuna], [nombre]) VALUES (2, N'San', NULL, NULL, NULL)
SET IDENTITY_INSERT [dbo].[UBIGEO] OFF
ALTER TABLE [dbo].[EMPRESA] ADD  CONSTRAINT [DF_EMPRESA_imagenlogo]  DEFAULT (NULL) FOR [imagenlogo]
GO
ALTER TABLE [dbo].[EMPRESA]  WITH CHECK ADD  CONSTRAINT [FK_EMPRESA_PERSONA] FOREIGN KEY([id_persona])
REFERENCES [dbo].[PERSONA] ([id_persona])
GO
ALTER TABLE [dbo].[EMPRESA] CHECK CONSTRAINT [FK_EMPRESA_PERSONA]
GO
ALTER TABLE [dbo].[EMPRESA]  WITH CHECK ADD  CONSTRAINT [FK_EMPRESA_RUBRO] FOREIGN KEY([id_rubro])
REFERENCES [dbo].[RUBRO] ([id_rubro])
GO
ALTER TABLE [dbo].[EMPRESA] CHECK CONSTRAINT [FK_EMPRESA_RUBRO]
GO
ALTER TABLE [dbo].[EMPRESA]  WITH CHECK ADD  CONSTRAINT [FK_EMPRESA_UBIGEO] FOREIGN KEY([id_ubigeo])
REFERENCES [dbo].[UBIGEO] ([id_ubigeo])
GO
ALTER TABLE [dbo].[EMPRESA] CHECK CONSTRAINT [FK_EMPRESA_UBIGEO]
GO
ALTER TABLE [dbo].[PAGO]  WITH CHECK ADD  CONSTRAINT [FK_PAGO_MOTIVO_PAGO] FOREIGN KEY([id_motivo_pago])
REFERENCES [dbo].[MOTIVO_PAGO] ([id_motivo_pago])
GO
ALTER TABLE [dbo].[PAGO] CHECK CONSTRAINT [FK_PAGO_MOTIVO_PAGO]
GO
ALTER TABLE [dbo].[PAGO]  WITH CHECK ADD  CONSTRAINT [FK_PAGO_RUEDA_NEGOCIO] FOREIGN KEY([id_rueda_negocio])
REFERENCES [dbo].[RUEDA_NEGOCIO] ([id_rueda_negocio])
GO
ALTER TABLE [dbo].[PAGO] CHECK CONSTRAINT [FK_PAGO_RUEDA_NEGOCIO]
GO
ALTER TABLE [dbo].[REUNION]  WITH CHECK ADD  CONSTRAINT [FK_REUNION_RUEDA_NEGOCIO] FOREIGN KEY([id_rueda_negocio])
REFERENCES [dbo].[RUEDA_NEGOCIO] ([id_rueda_negocio])
GO
ALTER TABLE [dbo].[REUNION] CHECK CONSTRAINT [FK_REUNION_RUEDA_NEGOCIO]
GO
ALTER TABLE [dbo].[RUEDA_NEGOCIO]  WITH CHECK ADD  CONSTRAINT [FK_RUEDA_NEGOCIO_EMPRESA] FOREIGN KEY([id_empresa])
REFERENCES [dbo].[EMPRESA] ([id_empresa])
GO
ALTER TABLE [dbo].[RUEDA_NEGOCIO] CHECK CONSTRAINT [FK_RUEDA_NEGOCIO_EMPRESA]
GO
EXEC sys.sp_addextendedproperty @name=N'MS_Description', @value=N'0 DARSE DE BAJA
1 ESTAR  ACTIVO' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'PERSONA', @level2type=N'COLUMN',@level2name=N'estado'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_Description', @value=N'1-Mesa
2-Stand
3-Sala
4-Toda la Zona' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'REUNION', @level2type=N'COLUMN',@level2name=N'id_tipo_zona'
GO
EXEC sys.sp_addextendedproperty @name=N'MS_Description', @value=N'0= sin pagar(derecho de pago por crear una rueda de negocios)
1= rueda de negocios cancelado(El estado es uno)
2=publicado para otros clientes y  empresas' , @level0type=N'SCHEMA',@level0name=N'dbo', @level1type=N'TABLE',@level1name=N'RUEDA_NEGOCIO', @level2type=N'COLUMN',@level2name=N'estado'
GO

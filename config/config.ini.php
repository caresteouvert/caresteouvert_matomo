; <?php exit; ?> DO NOT REMOVE THIS LINE
; If you want to change some of these default values, the best practise is to override
; them in your configuration file in config/config.ini.php. If you directly edit this file,
; you will lose your changes when you upgrade Matomo.
; For example if you want to override action_title_category_delimiter,
; edit config/config.ini.php and add the following:
; [General]
; action_title_category_delimiter = "-"


[Plugins]
; list of plugins (in order they will be loaded) that are activated by default in the Matomo platform
Plugins[] = CorePluginsAdmin
Plugins[] = CoreAdminHome
Plugins[] = CoreHome
Plugins[] = WebsiteMeasurable
Plugins[] = IntranetMeasurable
Plugins[] = Diagnostics
Plugins[] = CoreVisualizations
Plugins[] = Proxy
Plugins[] = API
Plugins[] = Widgetize
Plugins[] = Transitions
Plugins[] = LanguagesManager
Plugins[] = Actions
Plugins[] = Dashboard
Plugins[] = MultiSites
Plugins[] = Referrers
Plugins[] = UserLanguage
Plugins[] = DevicesDetection
Plugins[] = Goals
Plugins[] = Ecommerce
Plugins[] = SEO
Plugins[] = Events
Plugins[] = UserCountry
Plugins[] = GeoIp2
Plugins[] = VisitsSummary
Plugins[] = VisitFrequency
Plugins[] = VisitTime
Plugins[] = VisitorInterest
Plugins[] = RssWidget
Plugins[] = Feedback
Plugins[] = Monolog

Plugins[] = Login
Plugins[] = TwoFactorAuth
Plugins[] = UsersManager
Plugins[] = SitesManager
Plugins[] = Installation
Plugins[] = CoreUpdater
Plugins[] = CoreConsole
Plugins[] = ScheduledReports
Plugins[] = UserCountryMap
Plugins[] = Live
Plugins[] = CustomVariables
Plugins[] = PrivacyManager
Plugins[] = ImageGraph
Plugins[] = Annotations
Plugins[] = MobileMessaging
Plugins[] = Overlay
Plugins[] = SegmentEditor
Plugins[] = Insights
Plugins[] = Morpheus
Plugins[] = Contents
Plugins[] = BulkTracking
Plugins[] = Resolution
Plugins[] = DevicePlugins
Plugins[] = Heartbeat
Plugins[] = Intl
Plugins[] = Marketplace
Plugins[] = ProfessionalServices
Plugins[] = UserId
Plugins[] = CustomPiwikJs
Plugins[] = Tour
Plugins[] = EnvironmentVariables

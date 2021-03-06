{
  "slug": "user_management",
  "properties": {
    "name": "User Management",
    "show_feature_menu_item": true,
    "storage_key": "user_management",
    "tagline": "Get true user sessions and control account sharing, session duration and timeouts"
  },
  "sections": [
    {
      "slug": "section_enable_plugin_feature_user_accounts_management",
      "primary": true,
      "title": "Enable Plugin Feature: User Management",
      "title_short": "Enable / Disable",
      "summary": [
        "Purpose - User Management offers real user sessions, finer control over user session time-out, and ensures users have logged-in in a correct manner.",
        "Recommendation - Keep the User Management feature turned on."
      ]
    },
    {
      "slug": "section_user_session_management",
      "title": "User Session Management",
      "title_short": "Session Options",
      "summary": [
        "Purpose - Allows you to better control user sessions on your site and expire idle sessions and prevent account sharing.",
        "Recommendation - Use of this feature is highly recommend."
      ]
    },
    {
      "slug": "section_multifactor_authentication",
      "title": "Multi-Factor User Authentication",
      "title_short": "Enable / Disable",
      "summary": [
        "Purpose - Verifies the identity of users who log in to your site - i.e. they are who they say they are.",
        "Recommendation - Use of this feature is highly recommend. However, if your host blocks email sending you may lock yourself out."
      ]
    },
    {
      "slug": "section_bypass_user_accounts_management",
      "title": "By-Pass User Accounts Management",
      "title_short": "By-Pass",
      "summary": [
        "Purpose - Compatibility with XML-RPC services such as the WordPress iPhone and Android Apps.",
        "Recommendation - Keep this turned off unless you know you need it."
      ]
    },
    {
      "slug": "section_admin_login_notification",
      "title": "Admin Login Notification",
      "title_short": "Notifications",
      "summary": [
        "Purpose - So you can be made aware of when a WordPress administrator has logged into your site when you are not expecting it.",
        "Recommendation - Use of this feature is highly recommend."
      ]
    },
    {
      "slug": "section_non_ui",
      "hidden": true
    }
  ],
  "options": [
    {
      "key": "enable_user_management",
      "section": "section_enable_plugin_feature_user_accounts_management",
      "default": "N",
      "type": "checkbox",
      "link_info": "",
      "link_blog": "",
      "name": "Enable User Management",
      "summary": "Enable (or Disable) The User Management Feature",
      "description": "Checking/Un-Checking this option will completely turn on/off the whole User Management feature"
    },
    {
      "key": "enable_xmlrpc_compatibility",
      "section": "section_bypass_user_accounts_management",
      "default": "Y",
      "type": "checkbox",
      "link_info": "",
      "link_blog": "",
      "name": "XML-RPC Compatibility",
      "summary": "Allow Login Through XML-RPC To By-Pass Login Protection Rules",
      "description": "Enable this if you need XML-RPC functionality e.g. if you use the WordPress iPhone/Android App."
    },
    {
      "key": "enable_admin_login_email_notification",
      "section": "section_admin_login_notification",
      "sensitive": true,
      "default": "",
      "type": "email",
      "link_info": "",
      "link_blog": "",
      "name": "Admin Login Notification Email",
      "summary": "Send An Notification Email When Administrator Logs In",
      "description": "If you would like to be notified every time an administrator user logs into this WordPress site, enter a notification email address. No email address - No Notification."
    },
    {
      "key": "session_timeout_interval",
      "section": "section_user_session_management",
      "default": 2,
      "type": "integer",
      "link_info": "",
      "link_blog": "",
      "name": "Session Timeout",
      "summary": "Specify How Many Days After Login To Automatically Force Re-Login",
      "description": "WordPress default is 2 days, or 14 days if you check the 'Remember Me' box."
    },
    {
      "key": "session_idle_timeout_interval",
      "section": "section_user_session_management",
      "default": 0,
      "type": "integer",
      "link_info": "",
      "link_blog": "",
      "name": "Idle Timeout",
      "summary": "If the user is inactive for the number of hours specified, they will be forcefully logged out next time they return. Set this to '0' to turn off this option.",
      "description": "asdf."
    },
    {
      "key": "session_lock_location",
      "section": "section_user_session_management",
      "default": "N",
      "type": "checkbox",
      "link_info": "",
      "link_blog": "",
      "name": "Lock To Location",
      "summary": "Locks A User Session To IP address",
      "description": "When selected, a session is restricted to the same IP address as when the user logged in. If a logged-in user's IP address changes, the session will be invalidated and they'll be forced to re-login to WordPress."
    },
    {
      "key": "session_username_concurrent_limit",
      "section": "section_user_session_management",
      "default": 0,
      "type": "integer",
      "link_info": "",
      "link_blog": "",
      "name": "Max Simultaneous Sessions",
      "summary": "Limit Simultaneous Sessions For The Same Username",
      "description": "The number provided here is the maximum number of simultaneous, distinct, sessions allowed for any given username. Use '0' for no limits."
    }
  ],
  "definitions": {
    "user_sessions_table_name": "user_management",
    "user_sessions_table_columns": [
      "id",
      "session_id",
      "wp_username",
      "ip",
      "logged_in_at",
      "last_activity_at",
      "last_activity_uri",
      "used_mfa",
      "pending",
      "login_attempts",
      "created_at",
      "deleted_at"
    ]
  }
}
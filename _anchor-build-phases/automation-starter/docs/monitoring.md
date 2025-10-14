# Monitoring

- REST heartbeat: `/wp-json/workflow/v1/ping`
- Logs: `/wp-content/uploads/workflow-logs/log-YYYY-MM-DD.log`
- Admin → Tools → Workflow Status

Add an external uptime monitor to hit the heartbeat every 15 minutes.

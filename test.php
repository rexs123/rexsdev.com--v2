<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create Ticket - ExerPanel</title>
    <include href="inc/header.html">
</head>
<body>
    <include href="inc/navbars.html">
        <div class="main content tickets">
            <div class="container">
                <div class="content-title">
                    <h2>Create Ticket</h2>
                </div>
                {{ @message | raw }}
                <div class="row">
                    <form action="createticket" method="POST" role="form" autocomplete="off">
                        <div class="col-md-3">
                            <div class="row">
                                <div class="form-box">
                                    <div class="form-title">
                                        <p>Department</p>
                                    </div>
                                    <div class="form-content">
                                        <select class="form-control" name="department">
                                            <option value="Minecraft Support">Minecraft Support</option>
                                            <option value="Billing Support">Billing Support</option>
                                        </select>
                                        <span class="help-block">The department of which the issue is in</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-box">
                                    <div class="form-title">
                                        <p>Ticket Number</p>
                                    </div>
                                    <div class="form-content">
                                        <input class="form-control" type="text" name="ticketnum" value="{{ @ticketID }}" placeholder="Ticket Number" readonly>
                                        <span class="help-block">Refer to this number when support asks you for what the ticket ID is</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="row">
                                <div class="form-box">
                                    <div class="form-title">
                                        <p>Subject</p>
                                    </div>
                                    <div class="form-content">
                                        <input class="form-control" type="text" name="subject" placeholder="Enter subject of ticket here." required>
                                        <span class="help-block">Summarize your issue for us to know what this is about</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-box">
                                    <div class="form-title">
                                        <p>Message Content</p>
                                    </div>
                                    <div class="form-content">
                                        <textarea class="form-control" rows="12" id="markdowneditor" type="text" name="message" placeholder="Describe your issue in detail" required></textarea>
                                        <span class="help-block">The more details that you provide us the easier it will be to investigate any server issues you may have</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row left-align">
                                <div class="col-md-12">
                                    <button type="submit" name="submit" value="Login" class="ticket-button btn">Submit Ticket</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <include href="inc/footer.html">
</body>
</html>

@extends('layout.main')
@section('con_title')
    <title>{{$page_title}}</title>
    <meta name="description" content="{{$description}}">
    <meta name="keywords" content="{{$keywords}}" />
    <meta name="Abstract" content="{{$Abstract}}" />
@endsection
@section('extra_css')
    <style>
        .box-design{
            border: 2px solid grey;
            border-radius: 10px;
            padding: 5px;
            height: 155px;
        }

        .subnet-text{
            padding-left:15px;
            padding-top:15px;
            line-height: 23px;
        }
        .description-text{
            padding: 10px;
            background: #f0f0f0;
            margin-top: 5px;
            margin-left:15px;
            margin-bottom:-10px;
        }

        .nav-dis-text{
            padding-left:35px;
        }

        .nav-nest-text{
            padding-left:55px;

        }

        .more-model{
            background: #f4f4f4;
            padding: 15px;
            border-radius: 15px;
            border: 2px solid grey;
        }
        table {
            border-collapse: collapse;
            width: 90%;
            margin-left: 15px;
            margin-right: 55px;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even){background-color: #f2f2f2}

        th {
            background-color: #27c9fd;
            color: white;
            font-weight: normal;
        }
    </style>
@endsection
@section('content')
    <section class="about" style="margin-top: -380px;">
        <div class="container-2">
            <img src="/images/slider/thorntonlodgeb6.jpg" style="width: 100%; "/>
            <h3 class="bottom-left">Privacy Policy Notice</h3>
    </section>
    <!-- //main-content -->
    <section class="ab-info-main py-md-5 py-4" style="margin-top: -35px">
        <div class="container">
            <div class="inner-sec-w3pvt py-lg-5">
                <div class="blog-sec">
                    <h3 class="tittle text-center mb-lg-5 mb-3 inner-tittle"><span class="sub-tittle"></span> Privacy Policy Notice</h3>
                    <div class="row mt-lg-5 mt-4">
                        <div class="col-lg-12 blog-left-content">
                            <div class="card" data-aos="fade-up">
                                <div class="card-body">
                                    <p>www.thorntonlodge.com ('Website') is provided by Thornton Lodge Limited ('we'/'us'/'our'). In doing so, we may be in a position to receive and process personal information relating to you. As the controller of this information, we're providing this Privacy Notice ('Notice') to explain our approach to personal information.</p>
                                    <p>We intend only to process personal information fairly and transparently as required by data protection law including the General Data Protection Regulation (GDPR). In particular, before obtaining information from you we intend to alert you to this Notice, let you know how we intend to process the information and (unless processing is necessary for at least one of the 5 reasons outlined in clause 2 below) we'll only process the information if you consent to that processing. The GDPR also defines certain 'special categories' of personal information that's considered more sensitive. These categories require a higher level of protection, as explained below.</p>
                                    <p>Of course, you may browse parts of this Website without providing any information about yourself and without accepting cookies. In that case, it's unlikely we'll possess and process any information relating to you.</p>
                                    <p>We'll start this Notice by setting out the conditions we must satisfy before processing your data. However, you may wish to skip to clause 4, which summarises what we intend to collect. The Notice also explains some of the security measures we take to protect your personal information, and tells you certain things we will or won't do.</p>
                                    <p>Sometimes, when you take a new service or product from us, or discuss taking a new service or product but decide against, we might wish to provide you with further information about similar services or products by email or other written electronic communication. In that situation, we will always give you the opportunity to refuse to receive that further information and if you change your mind please let us know. We'll endeavour to remind you of your right to opt-out on each occasion that we provide such information.</p>

                                    <h6>1. Identity and contact details</h6>
                                    <p class="subnet-text">
                                        1.1	Registered number: 07884691<br/><br/>
                                        1.2	Registered office: 105 Brigstock Road, Thornton Heath, Surrey, CR7 7JL<br/><br/>
                                        1.3	admin@thorntonlodgecare.com<br/><br/>
                                    </p>

                                    <h6>2.	When we're allowed to collect information from you</h6>
                                    <p class="description-text">We will only collect personal information relating to you if one of the following conditions have been satisfied:</p>
                                    <p class="subnet-text">
                                        2.1	You have clearly told us that you are content for us to collect that information for the certain purpose or purposes that we will have specified.<br/><br/>
                                        2.2	The processing is necessary for the performance a contract that we have with you.<br/><br/>
                                        2.3	The processing is necessary so that we can comply with the law.<br/><br/>
                                        2.4	The processing is necessary to protect someone's life.<br/><br/>
                                        2.5	The processing is necessary for performance of a task that's in the public interest.<br/><br/>
                                        2.6	The processing is necessary for our or another's legitimate interest - but in this case, we'll balance those interests against your interests.<br/><br/>
                                    </p>

                                    <h6>3.	How to consent</h6>
                                    <p class="subnet-text">
                                        3.1	At the point of collecting the information, we'll endeavour to explain how we intend to use the information and which of these purposes apply. If we rely on consent, we'll provide you with the opportunity to tell us that you're happy to provide the information.<br/><br/>
                                        3.2	If at any point in time you change your mind and decide that you don't consent, please let us know and we'll endeavour to stop processing your information in the specified manner, or we'll delete your data if there is no continuing reason for possessing it.<br/><br/>
                                        3.3	If you don't consent to a particular bit of processing, we'll endeavour to ensure that the Website and our service continue to operate without the need for that information.<br/><br/>
                                    </p>

                                    <h6>4.	Information we expect to collect from you</h6>
                                    <p class="subnet-text">
                                        4.1	We envisage asking for the following types of information from you:<br/><br/>
                                        <table>
                                            <tr>
                                                <th width="25%">Information type</th>
                                                <th>Purpose and related details</th>
                                                <th>Justification</th>
                                            </tr>
                                            <tr>
                                                <td>Name</td>
                                                <td>•	We ask for this to We ask for this to To reply to their question</td>
                                                <td>•	It's necessary for the performance of a contract with you</td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>•	We ask for this to We ask for this to To reply to the questions asked</td>
                                                <td>•	It's necessary for the performance of a contract with you</td>
                                            </tr>
                                        </table>
                                    </p>
                                    <p class="subnet-text">
                                        4.2	We may collect personal information about you from a number of sources, including the following:
                                        <div class="nav-dis-text">
                                            <p>
                                                4.2.1	From you when you agree to take a service or product from us, in which case this may include your contact details, date of birth, how you will pay for the product or service and your bank details.<br/><br/>
                                                4.2.2	From you when you contact us with an enquiry or in response to a communication from us, in which case, this may tell us something about how you use our services.<br/><br/>
                                                4.2.3	From documents that are available to the public, such as the electoral register.<br/><br/>
                                                4.2.4	From third parties to whom you have provided information with your consent to pass it on to other organisations or persons - when we receive such information we will let you know as soon as is reasonably practicable.<br/><br/>
                                            </p>
                                        </div>
                                    </p>
                                    <p class="subnet-text">
                                        4.3	If you refuse to provide information requested, then if that information is necessary for a service we provide to you we may need to stop providing that service.<br/><br/>
                                        4.4	At the time of collecting information, by whichever method is used, we'll endeavour to alert you and inform you about our purposes and legal basis for processing that information, as well as whether we intend to share the information with anyone else or send it outside of the European Economic Area. If at any point you think we've invited you to provide information without explaining why, feel free to object and ask for our reasons.<br/><br/>
                                    </p>

                                    <h6>5.	Using your personal information</h6>
                                    <p class="subnet-text">
                                        5.1	Data protection, privacy and security are important to us, and we shall only use your personal information for specified purposes and shall not keep such personal information longer than is necessary to fulfil these purposes. The following are examples of such purposes. We have also indicated below which GDPR justification applies, however it will depend on the circumstances of each case. At the time of collecting we will provide further information, and you may always ask for further information from us.
                                        <div class="nav-dis-text">
                                            <p>
                                            5.1.1	To help us to identify you when you contact us. This will normally be necessary for the performance our contract.<br/><br/>
                                            5.1.2	To help us to identify accounts, services and/or products which you could have from us or selected partners from time to time. We may do this by automatic means using a scoring system, which uses the personal information you've provided and/or any information we hold about you and personal information from third party agencies (including credit reference agencies). We will only use your information for this purpose if you agree to it.<br/><br/>
                                            5.1.3	To help us to administer and to contact you about improved administration of any accounts, services and products we have provided before, do provide now or will or may provide in the future. This will often be necessary, but sometimes the improvements will not be necessary in which case we will ask whether you agree.<br/><br/>
                                            5.1.4	To allow us to carry out marketing analysis and customer profiling (including with transactional information), conduct research, including creating statistical and testing information. This will sometimes require that you consent, but will sometimes be exempt as market research.<br/><br/>
                                            5.1.5	To help to prevent and detect fraud or loss. This will only be done in certain circumstances when we consider it necessary or the law requires it.<br/><br/>
                                            5.1.6	To allow us to contact you by written electronic means (such as email, text or multimedia messages) about products and services offered by us where:<br/><br/>
                                            </p>
                                        </div>
                                            <div class="nav-nest-text">
                                                <p>
                                                    5.1.6.1	these products are similar to those you have already purchased from us,<br/><br/>
                                                    5.1.6.2	you were given the opportunity to opt out of being contacted by us at the time your personal information was originally collected by us and at the time of our subsequent communications with you, and<br/><br/>
                                                    5.1.6.3	you have not opted out of us contacting you.<br/><br/>
                                                </p>
                                            </div>
                                        <div class="nav-dis-text">
                                            <p>
                                                5.1.7	To allow us to contact you in any way (including mail, email, telephone, visit, text or multimedia messages) about products and services offered by us and selected partners where you have expressly consented to us doing so.<br/><br/>
                                                5.1.8	We may monitor and record communications with you (including phone conversations and emails) for quality assurance and compliance.
                                            </p>
                                        </div>
                                            <div class="nav-nest-text">
                                                <p>
                                                    5.1.8.1	Before doing that, we will always tell you of our intentions and of the specific purpose in making the recording. Sometimes such recordings will be necessary to comply with the law. Alternatively, sometimes the recording will be necessary for our legitimate interest, but in that case we'll only record the call if our interest outweighs yours. This will depend on all the circumstances, in particular the importance of the information and whether we can obtain the information another way that's less intrusive.<br/><br/>
                                                    5.1.8.2	If we think the recording would be useful for us but that it's not necessary we'll ask whether you consent to the recording, and will provide an option for you to tell us that you consent. In those situations, if you don't consent, the call will either automatically end or will not be recorded.
                                                </p>
                                            </div>
                                        <div class="nav-dis-text">
                                            <p>
                                                5.1.9	When it's required by law, we'll check your details with fraud prevention agencies. If you provide false or inaccurate information and we suspect fraud, we intend to record this.
                                            </p>
                                        </div>
                                    </p>
                                    <p class="subnet-text">
                                        5.2	We will not disclose your personal information to any third party except in accordance with this Notice, and in particular in these circumstances:
                                        <div class="nav-dis-text">
                                            <p>
                                                5.2.1	They will be processing the data on our behalf as a data processor (where we'll be the data controller). In that situation, we'll always have a contract with the data processor as set out in the GDPR. This contract provides significant restrictions as to how the data processor operates so that you can be confident your data is protected to the same degree as provided in this Notice.<br/><br/>
                                                5.2.2	Sometimes it might be necessary to share data with another data controller. Before doing that we'll always tell you. Note that if we receive information about you from a third party, then as soon as reasonably practicable afterwards we'll let you know; that's required by the GDPR.<br/><br/>
                                                5.2.3	Alternatively, sometimes we might consider it to be in your interest to send your information to a third party. If that's the case, we'll always ask whether you agree before sending.<br/><br/>
                                            </p>
                                        </div>
                                    </p>
                                    <p class="subnet-text">
                                        5.3	Where you give us personal information on behalf of someone else, you confirm that you have provided them with the information set out in this Notice and that they have not objected to such use of their personal information.<br/><br/>
                                        5.4	We may allow other people and organisations to use personal information we hold about you in the following circumstances:
                                        <div class="nav-dis-text">
                                            <p>
                                                5.4.1	If we, or substantially all of our assets, are acquired or are in the process of being acquired by a third party, in which case personal information held by us, about our customers, will be one of the transferred assets.<br/><br/>
                                                5.4.2	If we have been legitimately asked to provide information for legal or regulatory purposes or as part of legal proceedings or prospective legal proceedings.<br/><br/>
                                                5.4.3	We may employ companies and individuals to perform functions on our behalf and we may disclose your personal information to these parties for the purposes set out above, for example, for fulfilling orders, delivering packages, sending postal mail and email, removing repetitive information from customer lists, analysing data, providing marketing assistance, providing search results and links (including paid listings and links) and providing customer service. Those parties will be bound by strict contractual provisions with us and will only have access to personal information needed to perform their functions, and they may not use it for any other purpose. Further, they must process the personal information in accordance with this Notice and as permitted by the GDPR. From time to time, these other people and organisations to whom we may pass your personal information may be outside the European Economic Area. We will take all steps reasonably necessary to ensure that your personal information is treated securely and in accordance with this Notice and the GDPR.<br/><br/>
                                            </p>
                                        </div>
                                    </p>

                                    <h6>6.	Protecting information</h6>
                                    <p class="subnet-text">
                                        6.1	We have strict security measures to protect personal information.<br/><br/>
                                        6.2	We work to protect the security of your information during transmission by using appropriate technology to encrypt information you input.<br/><br/>
                                        6.3	We reveal only the last five digits of your credit card numbers when confirming an order. Of course, we transmit the entire credit card number to the appropriate credit card company during order processing.<br/><br/>
                                        6.4	We maintain physical, electronic and procedural safeguards in connection with the collection, storage and disclosure of personally identifiable customer information. Our security procedures mean that we may occasionally request proof of identity before we disclose personal information to you.<br/><br/>
                                        6.5	It is important for you to protect against unauthorised access to your password and to your computer. Be sure to sign off when you finish using a shared computer.<br/><br/>
                                    </p>

                                    <h6>7.	The internet</h6>
                                    <p class="subnet-text">
                                        7.1	If you communicate with us using the internet, we may occasionally email you about our services and products. When you first give us personal information through the Website, we will normally give you the opportunity to say whether you would prefer that  we don't contact you by email. You can also always send us an email (at the address set out below) at any time if you change your mind.<br/><br/>
                                        7.2	Please remember that communications over the internet, such as emails and webmails (messages sent through a website), are not secure unless they have been encrypted. Your communications may go through a number of countries before they are delivered - this is the nature of the internet. We cannot accept responsibility for any unauthorised access or loss of personal information that is beyond our control.<br/><br/>
                                    </p>

                                    <h6>8.	Further information</h6>
                                    <p class="subnet-text">
                                        8.1	If you would like any more information or you have any comments about this Notice, please either write to us at Data Protection Manager, Thornton Lodge Limited, 105 Brigstock Road, Thornton Heath, Surrey, CR7 7JL, or email us at admin@thorntonlodgecare.com.<br/><br/>
                                        8.2	Please note that we may have to amend this Notice on occasion, for example if we change the cookies that we use. If we do that, we will publish the amended version on the Website. In that situation we will endeavour to alert you to the change, but it's also your responsibility to check regularly to determine whether this Notice has changed.<br/><br/>
                                        8.3	You can ask us for a copy of this Notice by writing to the above address or by emailing us at admin@thorntonlodgecare.com. This Notice applies to personal information we hold about individuals. It does not apply to information we hold about companies and other organisations.<br/><br/>
                                        8.4	If you would like access to the personal information that we hold about you, you can do this by emailing us at admin@thorntonlodgecare.com or writing to us at the address noted above. There is not normally a fee for such a request, however if the request is unfounded, repetitive or excessive we may request a fee or refuse to comply with your request. You can also ask us to send the personal information we hold about you to another controller.<br/><br/>
                                        8.5	We aim to keep the personal information we hold about you accurate and up to date. If you tell us that we're holding any inaccurate or incomplete personal information about you, we will promptly amend, complete or delete it accordingly. Please email us at admin@thorntonlodgecare.com or write to us at the address above to update your personal information. You have the right to complain to the Information Commissioner's Office if we don't do this.<br/><br/>
                                        8.6	You can ask us to delete the personal information that we hold about you if we relied on your consent in holding that information or if it's no longer necessary. You can also restrict or object to our processing of your personal information in certain circumstances. You can do this by emailing us at admin@thorntonlodgecare.com or writing to us at the address noted above.<br/><br/>
                                        8.7	We will tell you if there is a breach, or a likely breach, of your data protection rights.<br/><br/>
                                    </p>

                                    <div class="more-model">
                                        <h6 align="center">'Just-in-time' notices</h6><br/>
                                        <p><strong>Privacy notice about necessary information</strong></p>
                                        <p>
                                            We have asked for personal information from you. This information is necessary for one of the reasons specified in the General Data Protection Regulation.<br/>
                                            For more information, please read our full privacy notice at www.thorntonlodge.com<br/>
                                            If you have any concerns, please contact us using the details provided in our privacy notice.<br/>
                                            ----------------------------------------------
                                        </p>
                                    </div>

                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated: 26 February 2019</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection